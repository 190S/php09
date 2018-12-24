<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //課題09-4,5
    //【応用】　artisanを使って、Admin/ProfileControllerを作成しましょう。
    //【応用】 Admin/ProfileControllerに、以下のedit Actionとupdate Actionを追加してみましょう。
    public function edit()
    {
      return view('admin.profile.edit');
    }

    public function update()
    {
      return redirect('admin/profile/edit');
    }
}
