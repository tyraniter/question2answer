<?php


class qa_group_page
{
    private $directory;
    private $urltoroot;


    public function load_module($directory, $urltoroot)
    {
        $this->directory = $directory;
        $this->urltoroot = $urltoroot;
    }

    public function suggest_requests() // for display in admin interface
    {
        return array(
            array(
                'title' => 'Group',
                'request' => 'group',
                'nav' => 'M', // 'M'=main, 'F'=footer, 'B'=before main, 'O'=opposite main, null=none
            ),
        );
    }

    public function match_request($request)
    {
        if ($request == 'group')
            return true;

        return false;
    }

    public function process_request($request)
    {
        $qa_content = qa_content_prepare();//necessary
        $qa_content['title'] = 'Test';
        $qa_content['custom'] = 'Some <b>group html</b>';

        return $qa_content;
    }

}

;


/*
	Omit PHP closing tag to help avoid accidental output
*/
