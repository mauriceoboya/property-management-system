<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoomtypeRequest;
use App\Http\Requests\UpdateRoomtypeRequest;
use App\Repositories\RoomtypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;


class RoomtypeController extends AppBaseController
{
    /** @var  RoomtypeRepository */
    private $roomtypeRepository;

    public function __construct(RoomtypeRepository $roomtypeRepo)
    {
        $this->roomtypeRepository = $roomtypeRepo;
    }

    /**
     * Display a listing of the Roomtype.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $roomtypes = $this->roomtypeRepository->all();

        return view('roomtypes.index')
            ->with('roomtypes', $roomtypes);
    }

    /**
     * Show the form for creating a new Roomtype.
     *
     * @return Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created Roomtype in storage.
     *
     * @param CreateRoomtypeRequest $request
     *
     * @return Response
     */
    public function store(CreateRoomtypeRequest $request)
    {
        $input = $request->all();

        $roomtype = $this->roomtypeRepository->create($input);

        Flash::success('Roomtype saved successfully.');

        return redirect(route('roomtypes.index'));
    }

    /**
     * Display the specified Roomtype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roomtype = $this->roomtypeRepository->find($id);

        if (empty($roomtype)) {
            Flash::error('Roomtype not found');

            return redirect(route('roomtypes.index'));
        }

        return view('roomtypes.show')->with('roomtype', $roomtype);
    }

    /**
     * Show the form for editing the specified Roomtype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roomtype = $this->roomtypeRepository->find($id);

        if (empty($roomtype)) {
            Flash::error('Roomtype not found');

            return redirect(route('roomtypes.index'));
        }

        return view('roomtypes.edit')->with('roomtype', $roomtype);
    }

    /**
     * Update the specified Roomtype in storage.
     *
     * @param int $id
     * @param UpdateRoomtypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoomtypeRequest $request)
    {
        $roomtype = $this->roomtypeRepository->find($id);

        if (empty($roomtype)) {
            Flash::error('Roomtype not found');

            return redirect(route('roomtypes.index'));
        }

        $roomtype = $this->roomtypeRepository->update($request->all(), $id);

        Flash::success('Roomtype updated successfully.');

        return redirect(route('roomtypes.index'));
    }

    /**
     * Remove the specified Roomtype from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roomtype = $this->roomtypeRepository->find($id);

        if (empty($roomtype)) {
            Flash::error('Roomtype not found');

            return redirect(route('roomtypes.index'));
        }

        $this->roomtypeRepository->delete($id);

        Flash::success('Roomtype deleted successfully.');

        return redirect(route('roomtypes.index'));
    }
}
