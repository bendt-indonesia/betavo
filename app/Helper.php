<?php

use Illuminate\Support\Str;

/**
 * @param string $name
 * @param string $value
 * @param string $default_value
 *
 * @return string
 */
if(!function_exists('selected')) {
    function selected($name, $value, $default_value = null)
    {
        $old = old($name);
        $selected = $old ==  $value ? true : (!$old && $default_value == $value ? true : false);

        return $selected ? 'selected' : '';
    }
}

/**
 * @param string $name
 * @param string $default_value
 *
 * @return string
 */
if(!function_exists('checked')) {
    function checked($name, $default_value = null)
    {
        $old = old($name);
        $checked = !is_null($old) ? $old : $default_value;

        return $checked ? 'checked' : '';
    }
}

/**
 * @param string $name
 * @param string $value
 * @param string $default_value
 *
 * @return string
 */
if(!function_exists('checked_radio')) {
    function checked_radio($name, $value, $default_value = null)
    {
        $old = old($name);
        $checked = !is_null($old) ? $old == $value : $default_value == $value;

        return $checked ? 'checked' : '';
    }
}

/**
 * @param object $input
 * @param string $name
 * @param string $value
 *
 * @return string
 */
if(!function_exists('input_selected')) {
    function input_selected($input, $name, $value)
    {
        if(isset($input[$name])) {
            return $input[$name] == $value ? 'selected' : '';
        }
        else {
            return '';
        }
    }
}

/**
 * @param string $text
 * @param number $length
 *
 * @return string
 */
if(!function_exists('substr_eow')) {
    function substr_eow($text, $length = 100)
    {
        $line = $text;
        if (preg_match('/^.{1,' . $length . '}\b/s', $text, $match))
        {
            $line=$match[0];
        }

        return $line;
    }
}

/**
 * @param object $file
 * @param string $prefix
 *
 * @return string
 */
if(!function_exists('rand_file_name')) {
    function rand_file_name($file, $prefix)
    {
        return Str::slug($prefix) . '-' . (microtime(true)*10000) . '.' . $file->getClientOriginalExtension();
    }
}


/**
 * @param string $path
 * @param object $file
 * @param string $name
 *
 * @return string
 */
if(!function_exists('save_file')) {
    function save_file($path, $file, $name = null)
    {
        if(is_null($name)) {
            return $file->storeAs('public' . $path);
        }
        else {
            $file->storeAs('public' . $path, $name);

            return $path . $name;
        }
    }
}

/**
 * @param string $url
 *
 * @return null
 */
if(!function_exists('delete_file')) {
    function delete_file($url)
    {
        \Illuminate\Support\Facades\Storage::delete('public' . $url);
    }
}

/**
 * Return data to debug as http exception (AJAX).
 *
 * @param  string  $content
 *
 * @return \Illuminate\Http\Exceptions\HttpResponseException
 */
if(!function_exists('ajax_debug')) {
    function ajax_debug($content = '')
    {
        throw new \Illuminate\Http\Exceptions\HttpResponseException(new \Illuminate\Http\Response($content, 500));
    }
}


/**
 * Store Helper
 *
 * @param string $key
 *
 * @return \App\Store
 */
if(!function_exists('stores')) {
    function stores($key)
    {
        return \App\Store::get($key);
    }
}

/**
 * Return value if it has value or else return default
 *
 * @param object $variable
 *
 * @param object $default
 *
 * @return string
 */
if(!function_exists('if_empty')) {
    function if_empty($variable, $default = null)
    {
        return empty($variable) ? $default : $variable;
    }
}

/**
 * Convert multidimensional array to object
 *
 * @param array $array
 *
 * @return object
 */
if(!function_exists('arrayToObject')) {
    function arrayToObject($array)
    {
        return json_decode(json_encode($array));
    }
}

/**
 * @param array $array
 *
 * @return string
 */
if(!function_exists('arrayToString')) {
    function arrayToString($array, $separator = ',', $quoteSymbol="'") {
        $string = "";
        if(is_array($array)) {
            foreach ($array as $index=>$row) {
                $string .= $quoteSymbol.$row.$quoteSymbol;
                if($index < (count($array)-1)) $string .= $separator;
            }
        }

        //Output 'a','b','x'
        return $string;
    }
}


/**
 * @param array $array
 *
 * @return string
 */
if(!function_exists('arrayToString2')) {
    function arrayToString2($array) {
        $string = "";
        if(is_array($array)) {
            foreach ($array as $index=>$row) {
                $string .= $row;
                if($index < (count($array)-1)) $string .= ',';
            }
        }

        //Output 'a','b','x'
        return $string;
    }
}

if (! function_exists('asset_path')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param  string  $path
     * @param  string  $manifestDirectory
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    function asset_path($path, $mixin = false)
    {

        $env     = env('APP_ENV');
        $cdnUrl  = env('CDN_URL');

        if($mixin) {
            $path = mix($path);
            $path = substr($path,1);
        }

        // Reference CDN assets only in production or staging environemnt.
        // In other environments, we should reference locally built assets.
        if ($cdnUrl && ($env === 'production')) {
            $mixPath = $cdnUrl . $path;
        } else {
            $mixPath = asset($path);
        }
        return $mixPath;
    }
}

if(!function_exists('c_log')) {
    function c_log($msg)
    {
        echo '>>>>> '.$msg.PHP_EOL;
    }
}

if (!function_exists('quote')) {
    /**
     * @param string $string
     * @param string $quotedBy
     *
     * @return string
     */
    function quote($string, $quotedBy = "'")
    {
        return $quotedBy . $string . $quotedBy;
    }
}

if(!function_exists('t')) {
    /**
     * @param integer $int
     *
     * @return string
     */
    function t($int) {
        $str = "";
        for($i = 0; $i < $int; $i++) $str .= "\t";
        return $str;
    }
}


if (!function_exists('filterDataTables')) {
    /**
     * @param Illuminate\Http\Request $request
     * @param array $filters
     * @param object $query
     * @param integer $limit
     *
     * @return string
     */
    function filterDataTables($request, $filters, $query, $limit = 5000)
    {
        foreach ($filters as $field => $like) {
            if ($request->has($field) && $field !== 'deleted')
                if ($request->get($field) === 'null') {
                    $query->where($field, NULL);
                } else if ($like === 'like') {
                    $query->where($field, 'like', "%{$request->get($field)}%");
                } else if ($like === 'multi') {
                    $arr = explode(',', $request->get($field));
                    $query->whereIn($field, $arr);
                } else {
                    $query->where($field, $like, $request->get($field));
                }
        }

        if ($request->has('offset') && $request->has('limit')) {
            $query->skip($request->has('offset'))->take($request->get('limit'));
        } else if ($request->has('limit')) {
            $query->limit($request->get('limit'));
        } else if($limit !== null) {
            $query->limit($limit);
        }

        return $query;
    }
}

/**
* Check Dir Helper
*
* @param string $key
* @param string $value
*
* @return bool
*/
if (!function_exists('check_dir')) {
    function check_dir($dir)
    {
        if(!is_dir($dir)) {
            mkdir($dir);
        }

        return true;
    }
}

/**
* Throw Error String Generator
*
* @param string $code
* @param string $message
* @param int $http_code
*
* @return Array
*/
if (!function_exists('abt')) {
    function abt($error_code, $message, $http_code = 400)
    {
        //$errorMsg = "[ ERR: ".$error_code." ] ".$message;
        $errorMsg = $message.' ( Error Code: '.$error_code.' )';
        throw new \Exception($errorMsg,$http_code);
    }
}

/**
* Throw Validation Error
*
* @param string $errors
* @param integer $http_code
*
* @return Array
*/
if (!function_exists('abtv')) {
    function abtv($errors, $http_code = 422)
    {
        $message = json_encode($errors);
        throw new \App\Exceptions\MyValidationException($message,$http_code);
    }
}

/**
* Helper Function for Indonesia Nominal in Wording
*
* @param integer $nilai
*
* @return String
*/
if (!function_exists('penyebut')) {
    function penyebut($nilai) {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " ". $huruf[$nilai];
        } else if ($nilai <20) {
            $temp = penyebut($nilai - 10). " belas";
        } else if ($nilai < 100) {
            $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
        }
        return $temp;
    }
}

/**
 * Helper Function for Indonesia Nominal in Wording
 *
 * @param integer $nilai
 *
 * @return String
 */
if (!function_exists('terbilang')) {
    function terbilang($nilai)
    {
        if ($nilai < 0) {
            $hasil = "minus " . trim(penyebut($nilai));
        } else {
            $hasil = trim(penyebut($nilai));
        }
        return ucwords($hasil);
    }
}


/**
 * Specify which DataList to be used, based on request origin header.
 *
 * @param  Illuminate\Http\Request $request
 * @param  stdClass $DataList
 * @param  boolean $alwaysIndex
 * @return array $filters
 */
if (!function_exists('checkListType')) {
    function checkListType($request, $dataList, $alwaysIndex = false)
    {
        $listType = $request->get('list_type');
        $origin_path = $request->get('origin_path');

        if(!$listType || !$origin_path) return [];
        if($alwaysIndex) return $dataList->index();

        $filters = $dataList->{$listType}();

        if ($listType === 'common') {
            foreach ($dataList::$mapping as $path => $function) {
                if (Str::startsWith($origin_path, $path)) {
                    return $dataList->{$dataList::$mapping[$path]}();
                }
            }
        }

        return $filters;
    }
}

/**
 * Specify which DataList $with_relations to be used, based on request origin header.
 *
 * @param  Illuminate\Http\Request $request
 * @param  stdClass $DataList
 * @param  boolean $alwaysIndex
 * @return array $filters
 */
if (!function_exists('checkWithRelations')) {
    function checkWithRelations($request, $DataList, $alwaysIndex = false)
    {
        $listType = $request->get('list_type');
        $origin_path = $request->get('origin_path');
        $withs = $request->get('withs') ? explode(',',$request->get('withs')) : [];

        if($alwaysIndex) return array_merge($withs,$DataList::$with_relations['index']);
        if(!$listType || !$origin_path) return $DataList->index();

        if ($listType === 'common') {
            foreach ($DataList::$with_relations as $path => $list) {
                if (Str::startsWith($origin_path, $path)) {
                    return array_merge($withs,$DataList::$with_relations[$path]);
                }
            }
            return array_merge($withs,$DataList::$with_relations['common']);
        }

        return array_merge($withs,$DataList::$with_relations['index']);
    }
}
