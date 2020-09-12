<?php
/*
 *
  ____                 _ _     _____           _                       _
 |  _ \               | | |   |_   _|         | |                     (_)
 | |_) | ___ _ __   __| | |_    | |  _ __   __| | ___  _ __   ___  ___ _  __ _
 |  _ < / _ \ '_ \ / _` | __|   | | | '_ \ / _` |/ _ \| '_ \ / _ \/ __| |/ _` |
 | |_) |  __/ | | | (_| | |_   _| |_| | | | (_| | (_) | | | |  __/\__ \ | (_| |
 |____/ \___|_| |_|\__,_|\__| |_____|_| |_|\__,_|\___/|_| |_|\___||___/_|\__,_|

 Please don't modify this file because it may be overwritten when re-generated.
 */

namespace App\Config;

use Illuminate\Cache\Repository;
use Illuminate\Support\Facades\DB;
use App\Config\Config as Model;

class ConfigStore
{
    const CACHE_KEY = 'config_cache', CACHE__MINUTE_DURATION = 1440;

    private $cache;

    private $_data = null;

    public function __construct(Repository $cache)
    {
        $this->cache = $cache;
    }

    public function data()
    {
        if(is_null($this->_data))
        {
            $this->_data = $this->_fetch();
        }
        return $this->_data;
    }

    public function value($key, $default = null)
    {
        $data = $this->data();
        $config = $data->get($key);
        return $config ? $config->value : $default;
    }

    private function _fetch()
    {
        $config = $this->cache->remember(self::CACHE_KEY, self::CACHE__MINUTE_DURATION, function(){
            return $this->_fetchFromDatabase();
        });

        return $config;
    }

    private function _fetchFromDatabase()
    {
        return Model::all()->keyBy('name');
    }

    private function _clearCache()
    {
        $this->cache->forget(self::CACHE_KEY);
        $this->_data = null;
    }

    public function store($input)
    {
        $new = new Model($input);
        $new->save();

        $this->_clearCache();
    }

    public function storeMany(array $inputs)
    {
        DB::beginTransaction();
        foreach ($inputs as $key => $value)
        {
            (new Model([
                "name" => $key,
                "value" => $value
            ]))->save();
        }
        DB::commit();
        $this->_clearCache();
    }

    public function updateMany(array $inputs)
    {
        // Populate config
        $config = $this->data();

        DB::beginTransaction();
        foreach ($inputs as $key => $value)
        {
            if(isset($config[$key]))
            {
                $config[$key]->value = $value;
                $config[$key]->save();
            }
        }
        DB::commit();
        $this->_clearCache();
    }
}
