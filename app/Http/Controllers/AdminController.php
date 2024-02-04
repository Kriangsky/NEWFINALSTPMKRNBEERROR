<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function showAllData()
    {
        $users = User::all();
        $teams = Team::all();

        return view('admin.home', compact('users', 'teams'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('group_name', 'password');

        if ($credentials['group_name'] === 'admin' && $credentials['password'] === 'admin') {
            return redirect()->route('all-data');
        }

        return back()->withErrors(['group_name' => 'Invalid credentials']);
    }


    public function search(Request $request)
    {
        $users = User::all();
        $teams = Team::all();

        $groupedData = [];

        // Group users by group_name
        foreach ($users as $user) {
            $groupedData[$user->group_name]['users'][] = $user;
        }

        // Group teams by group_name
        foreach ($teams as $team) {
            $groupedData[$team->group_name]['teams'][] = $team;
        }

        // Retrieve the search term from the request
        $searchTerm = $request->input('search');

        return view('admin.home', compact('groupedData', 'searchTerm'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        // You can return a view for user editing, or redirect to an edit form.
        // Example using a view:
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->update([
            'group_name' => $request->group_name,
            'leadername' => $request->leadername,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'binusian' => $request->binusian,
            'whatsapp' => $request->whatsapp,
            'line' => $request->line,
            'github' => $request->github,
            'birth_date' => $request->birth_date,
            'birth_place' => $request->birth_place,
            // 'cv' => $request->cv,    
            // 'id_card' => $request->birth_date,
            // 'flazz_card' => $request->birth_place,
        ]);

        return redirect()->route('all-data')->with('success', 'User updated successfully!');
    }

    public function delete($id)
    {
        $user = User::find($id);

        // Perform any additional checks, like user authorization, before deleting
        // ...

        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }
    // public function lists(Request $request)
    // {
    //     $teams = Team::with('leaderDetail');
    //     if ($keyword = $request->get('keyword')) {
    //         $teams = $teams->where('name', 'like', "%$keyword%");
    //     }
    //     $teams = $teams->get();
    //     $tableData = [];
    //     $thirdColumn = '';
    //     if ($category = $request->get('category')) {
    //         switch ($category) {
    //             case 'cv':
    //                 $thirdColumn = 'cv';
    //                 break;
    //             case 'binusian':        
    //                 $thirdColumn = 'binusian';
    //                 break;
    //             case 'non-binusian':
    //                 $thirdColumn = 'non-binusian';
    //                 break;
    //         }
    //     }
    //     foreach ($teams as $team) {
    //         $tableData[] = [
    //             'team_id' => $team->team_id,
    //             'team_name' => $team->name,
    //             'leader_name' => $team->leaderDetail->name,
    //             'third_column' => $thirdColumn == 'cv' ? $team->leaderDetail->cv : ($thirdColumn == 'binusian' ? ($team->leaderDetail->flazz_card) : ($thirdColumn == 'non-binusian' ? ($team->leaderDetail->id_card) : $team->leaderDetail->whatsapp)),
    //         ];
    //     }

    //     return view('admin.home', compact(['tableData']));
    // }
}
