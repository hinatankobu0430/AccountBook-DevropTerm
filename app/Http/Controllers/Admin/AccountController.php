<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Account;

class AccountController extends Controller
{
    //actionの実装
    public function add()
    {
        return view('admin.account.create');
    }
    
    public function index()
    {
        return view('admin.account.index');
    }
    
    public function create(Request $request)
    {
        //validation
        $this->validate($request, Account::$rules);
        
        //instance生成
        $account = new Account;
        //データ取得
        $form = $request->all();
        
        //tokenの削除・failの削除
        unset($form['token']);
        
        //DBに保存
        $account->fill($form);
        $account->save();
        
        return redirect('admin/account/create');
    }
    
    public function edit()
    {
        
    }
    
    public function update()
    {
        
    }
    
    public function delete()
    {
        
    }
    
    
}
