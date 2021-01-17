<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateRoomnumberRequest;
use App\Http\Requests\UpdateRoomnumberRequest;
use App\Repositories\RoomnumberRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use App\Models\Roomtype;
use App\Models\Roomnumber;
use Response;

class RoomnumberController extends AppBaseController
{
    /** @var  RoomnumberRepository */
    private $roomnumberRepository;

    public function __construct(RoomnumberRepository $roomnumberRepo)
    {
        $this->roomnumberRepository = $roomnumberRepo;
    }

    /**
     * Display a listing of the Roomnumber.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $roomtype=Roomtype::all();
        $roomnumbers = $this->roomnumberRepository->all();
        $roomtypes =DB::table('roomtype')
        ->join('roomnumbers','roomtype_id', '=', 'roomtype.id')->get();
        return view('roomnumbers.index',compact('roomtypes','roomtype'))
            ->with('roomnumbers', $roomnumbers);
    }

    /**
     * Show the form for creating a new Roomnumber.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Roomnumber in storage.
     *
     * @param CreateRoomnumberRequest $request
     *
     * @return Response
     */
    public function store(CreateRoomnumberRequest $request)
    {
        $input = $request->all();

        $roomnumber = $this->roomnumberRepository->create($input);

        Flash::success('Roomnumber saved successfully.');

        return redirect(route('roomnumbers.index'));
    }

    /**
     * Display the specified Roomnumber.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roomnumber = $this->roomnumberRepository->find($id);

        if (empty($roomnumber)) {
            Flash::error('Roomnumber not found');

            return redirect(route('roomnumbers.index'));
        }

        return view('roomnumbers.show')->with('roomnumber', $roomnumber);
    }

    /**
     * Show the form for editing the specified Roomnumber.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roomnumber = $this->roomnumberRepository->find($id);

        if (empty($roomnumber)) {
            Flash::error('Roomnumber not found');

            return redirect(route('roomnumbers.index'));
        }

        return view('roomnumbers.edit')->with('roomnumber', $roomnumber);
    }

    /**
     * Update the specified Roomnumber in storage.
     *
     * @param int $id
     * @param UpdateRoomnumberRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        $roomnumber=Roomnumber::findOrfail($request->roomnumber_id);

        $roomnumber->update($request->all());


        Flash::success('Roomnumber updated successfully.');

        return redirect(route('roomnumbers.index'));
    }

    /**
     * Remove the specified Roomnumber from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roomnumber = $this->roomnumberRepository->find($id);

        if (empty($roomnumber)) {
            Flash::error('Roomnumber not found');

            return redirect(route('roomnumbers.index'));
        }

        $this->roomnumberRepository->delete($id);

        Flash::success('Roomnumber deleted successfully.');

        return redirect(route('roomnumbers.index'));
    }
}


// public function update(Request $request, $id)
// {
//     $user = User::find($id);
//     $user = User::where('id',$id)->first();
//     $user->name = $request->input('name');
//     if($user->save())
//     {
//     $profile = Profile::find($id);
//     $profile = Profile::where('id',$id)->first();
//     $profile->user_id = $request->input('user_id');
//     $profile->about = $request->input('about');
//     $profile->website = $request->input('website');
//     $profile->phone = $request->input('phone');
//     $profile->state = $request->input('state');
//     $profile->city = $request->input('city');

//     if ($request->hasFile('photo')) {
//         $photo = $request->file('photo');
//         $filename = 'photo' . '-' . time() . '.' . $photo->getClientOriginalExtension();
//         $location = public_path('images/' . $filename);
//         Image::make($photo)->resize(1300, 362)->save($location);
//         $profile->photo = $filename;

//         $oldFilename = $profile->photo;
//         $profile->photo = $filename;
//         Storage::delete($oldFilename);
//     }

//     $profile->save();
//     return redirect()->route('profile', $user->id)->with('success', 'Your info are updated');
// }
//     return redirect()->back()->with('error','Something went wrong');
// }
