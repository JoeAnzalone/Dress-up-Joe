<?php

class OutfitController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['outfits'] = Outfit::all();

        $this->layout->content = View::make('outfits.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->layout->content = View::make('outfits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $outfit = new Outfit;
        // $outfit->garments = Input::get('garments');
        $outfit->name = 'Exmaple outfit';
        $outfit->user_id = Confide::user()->id;
        $outfit->background_id = Background::first()->id;

        try {
            $outfit->save();
        } catch (Exception $e) {
            return Redirect::to('.')->with(
                'response', [ 'class' => 'error', 'message' => $e->getMessage() ]
            );
        }

        $message = '<p>Outfit saved!</p>';
        return Redirect::to('.')->with('response', ['class' => 'success', 'message' => $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}