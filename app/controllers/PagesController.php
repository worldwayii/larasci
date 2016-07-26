<?php

class PagesController extends BaseController {

    /**
     * gets the contact page
     * @return Response
     */
    public function contact()
    {
        return View::make('pages.contact');
    }

    public function postContact()
    {
        $data = Input::all();
        $names = explode(' ', $data['fullname']);
        $firstName = $names[0];
        //$lastName = isset($names[1]) ? $names[1]: '';

        $data['first_name'] = $firstName;
        $data['body'] = '<p>New email from '.$data['fullname'].' <br><br>Message: <br></p>
					<p>'.$skill_approval_list.'</p>';
        if(false)
        {
            //$data['extra'] = 'Assuming we want to add some extra info to the template';
        }
        $data['companyName'] = 'LaraSCI';

        Mail::queue('emails.template', $data, function($message) use($admin_email) {
            $message->from('info@larasci.com', 'Kitulu');
            $message->to($admin_email);
            $message->subject('New contact form email');
        });
        return View::make('pages.contact')->withFirstname($firstName);
    }

}
