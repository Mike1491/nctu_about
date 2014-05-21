<?php

class AdminDashboardController extends AdminController {

    /*
     * Dashboard Index
     */
    public
    function getIndex()
    {
        return View::make('admin.dashboard.index');
    }

    public
    function getUser($username)
    {
        $username = strtolower($username);
        $user = User::where('username', $username)->first();

        $contact = Contact::find($user->id);

        return View::make('site.index.index', compact('user', 'contact'));
    }

    public
    function getBasic()
    {
        $user = User::find(Session::get('user.id'));

        return View::make('admin.dashboard.basic', compact('user'));
    }

    public
    function postBasic()
    {
        $user = User::find(Session::get('user.id'));
        $user->cname = Input::get('cname');
        $user->ename = Input::get('ename');
        $user->welcome_text = Input::get('welcome_text');
        $user->position = Input::get('position');
        $user->company = Input::get('company');
        $user->slogan = Input::get('slogan');
        $user->description = Input::get('description');
        $user->customers = (int) Input::get('customers');
        $user->experience = (int) Input::get('experience');
        $user->awards = (int) Input::get('awards');
        $user->projects = (int) Input::get('projects');

        $user->save();

        return Redirect::to('/admin/dashboard/basic');
    }

    public
    function getExperience()
    {
        $user = User::find(Session::get('user.id'));

        $exps = Work::where('user_id', $user->id)->orderBy('from_year', 'desc');

        return View::make('admin.dashboard.experience', compact('user'));
    }

    public
    function getContact()
    {
        $contact = Contact::find(Session::get('user.id'));

        if (!$contact) $contact = new Contact;

        return View::make('admin.dashboard.contact', compact('contact'));
    }

    public
    function postContact()
    {
        $contact = Contact::find(Session::get('user.id'));

        if (!$contact) {
            $contact = new Contact;
            $contact->id = Session::get('user.id');
        }
        $contact->address = Input::get('address');
        $contact->phone = Input::get('phone');
        $contact->cellphone = Input::get('cellphone');
        $contact->email = Input::get('email');
        $contact->website = Input::get('website');

        $contact->save();

        return Redirect::to('/admin/dashboard/contact');
    }


    public
    function getLogin()
    {
        return View::make('admin.dashboard.login');
    }

    public
    function postLogin()
    {
        $user = User::where('username', strtolower(Input::get('username')))->first();

        if ($user) {
            Session::put('user.id', $user->id);
            Session::put('user.username', $user->username);
            Session::put('user.cname', $user->cname);
            Session::put('user.ename', $user->ename);

            return Redirect::to('/admin/dashboard/basic');
        } else {
            return Redirect::to('/login')->with('errorLog', '帳號密碼錯誤！');
        }
    }

    public
    function getLogout()
    {
        Session::forget('user');

        return Redirect::to('/login');
    }

}
