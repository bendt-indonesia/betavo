<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\ClientMessages as Model;
use App\Data\ClientMessages\RequestStoreClientMessages;
use App\Data\ClientMessages\RequestUpdateClientMessages;


class ClientMessagesController extends Controller
{
    

    const PREFIX = 'backend.ClientMessages';

    /**
     * Display a listing of the resource ClientMessages
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $models = Model::
				select('*');

            return view(self::PREFIX.'.index',[
                'data' => $models->get()
            ]);
        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect('backend');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(self::PREFIX . '.create', [

        ]);
    }

    /**
     * Store a newly created ClientMessages resource in storage.
     *
     * @param \App\Data\ClientMessages\RequestStoreClientMessages $request
     * @throws null
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreClientMessages $request)
    {
        try {

            $model = new Model($request->validated());
            $model->process($request->allFiles(),'create');

            $request->session()->flash('success', 'New record (ClientMessages) has been added!');

            return redirect()->route(self::PREFIX);
        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.client_messages.index');
        }
    }

    /**
     * Display the specified resource ClientMessages.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id = NULL)
    {
        try {

            $model = Model::findOrFail($id);

            return view(self::PREFIX . '.show', [
                'model' => $model
            ]);

        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.client_messages.index');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        try {

            $model = Model::findOrFail($id);

            return view(self::PREFIX . '.edit', [
                'model' => $model,

            ]);

        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.client_messages.index');
        }
    }

    /**
     * Update the specified ClientMessages resource in storage.
     *
     * @param  \App\Data\ClientMessages\RequestUpdateClientMessages $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestUpdateClientMessages $request, $id)
    {
        try {

            $model = Model::find($id);
            $model->fill($request->validated());
            $model->process($request->allFiles());

            $request->session()->flash('success', 'Record Updated!');

            return redirect()->route(self::PREFIX);

        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.client_messages.index');
        }
    }

    /**
     * Remove the specified ClientMessages resource from storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $model = Model::findOrFail($id);
            $model->remove();

            $request->session()->flash('success', 'Record removed!');

            return redirect()->route(self::PREFIX);
        } catch (\Exception $e) {
            $request->session()->flash('danger', $e->getMessage());
            return redirect()->route('backend.client_messages.index');
        }
    }
}
