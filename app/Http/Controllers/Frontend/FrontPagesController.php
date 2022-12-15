<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Auth\User;
use App\Models\backend\Document;
use App\Models\backend\DocumentCategory;
use App\Models\backend\team;
use App\Models\backend\Event;
use App\Models\frontend\post;
use App\Models\frontend\announcement;
use App\Models\backend\Gallery;
use App\Models\backend\Company;
use App\Models\backend\activity;
use App\Models\backend\unit_type;
use App\Models\backend\StaticPages;
use App\Models\backend\activity_type;
use App\Models\backend\Advert;
 use App\Models\backend\FoundingMembers;
use App\Models\backend\AdvisoryBoard;
use App\Models\backend\SupervisoryBoard;
use App\Models\backend\BoardofDirectors;
use App\Models\backend\Member_Posting;
use App\Models\frontend\member_post;
use App\Models\backend\ShoppingController;
use App\Models\backend\ShoppingModel;
use App\Http\Controllers\Frontend\BaseFrontendController;
use App\Models\frontend\advert_images;
use App\Models\backend\sss;

/**
 * Class HomeController.
 */
class FrontPagesController extends BaseFrontendController
{

    public function activities()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $activities = activity::orderBy("id", "desc")->paginate(6);
        return view('frontend.activities.activities', compact('activities','posts'));
    }


    public function document()
    {

        $posts = post::orderBy("id", "desc")->paginate(6);

        $document = Document::orderBy("id", "desc")->get();

        $categories = DocumentCategory::wherenull('category_id')->orderBy("id", "desc")->get();


         return view('frontend.teknik-dokumanlar.teknik-dokuman', compact('document','categories','posts'));
    }

    public function sub_category($id)
    {

        $posts = post::orderBy("id", "desc")->paginate(6);
        //$document = Document::orderBy("id", "desc")->paginate(6);

        $categories = DocumentCategory::Where('category_id',$id)->orderBy("id", "desc")->get();
        $categories_title = DocumentCategory::wherenull('category_id')->orderBy("id", "desc")->get();


        return view('frontend.teknik-dokumanlar.sub', compact('categories','posts','categories_title'));
    }

    public function document_detay($id)
    {

        $posts = post::orderBy("id", "desc")->paginate(6);

        $document = Document::where('category_id',$id)->orderBy("id", "desc")->get();

        $categories = DocumentCategory::Where('category_id',$id)->orderBy("id", "desc")->get();


        return view('frontend.teknik-dokumanlar.detay', compact('document','posts','categories'));
    }


    public function activity(activity $activity)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        return view('frontend.activities.activity-single', compact('activity','posts'));
    }




    public function activitytype(activity_type $activitytype)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $activities = $activitytype->activities();

        return view('frontend.activities.activities_by_activity', compact('activitytype', 'activities','posts'));
    }

    public function unittype(unit_type $unittype)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $posts = $unittype->posts();
        $activities = $unittype->activities();
        return view('frontend.news.news_by_unit', compact('unittype', 'posts', 'activities','posts'));
    }


    public function nereden_alinir()
    {
        $posts = post::orderBy("id", "desc")->paginate(6);

        $company = Company::get();

        $toptanci = Company::where("category_bayi", 0)->get();
        $bayi = Company::where("category_bayi", 1)->get();

        return view('frontend.nereden-alinir', compact('company','toptanci','bayi','posts'));
    }

    public function news()
    {

        $posts = post::orderBy("id", "desc")->paginate(6);
        return view('frontend.news.news', compact('posts','posts'));
    }



    public function news_single(Post $post)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        return view('frontend.news.new-single', compact('posts','post'));
    }

    public function announcements()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $announcements = announcement::orderBy("id", "desc")->paginate(6);
        return view('frontend.announcements.announcements', compact('announcements','posts'));
    }



    public function announcements_single(announcement $announcement)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $announcements = announcement::orderBy("id", "desc")->paginate(6);

        return view('frontend.announcements.announcement-single', compact('announcements','announcement','posts'));
    }




    public function organizational_structure()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $o_s = StaticPages::where('id', 1)->select('o_title_tr', 'o_text_tr', 'o_image')->get()->first();
        return view('frontend.organizational-structure', compact('o_s','posts'));
    }

    public function bylaws()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $bylaws = StaticPages::where('id', 1)->select('g_title_tr', 'g_text_tr', 'g_pdf')->get()->first();
        return view('frontend.bylaws', compact('bylaws','posts'));
    }

    public function asd()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $privacy_policy = StaticPages::where('id', 1)->select('g_title_tr', 'g_text_tr', 'g_pdf')->get()->first();
        return view('frontend.privacy_policy', compact('privacy_policy','posts'));
    }




    public function executive_management()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $teams = team::all();
        return view('frontend.executive-management', compact('teams','posts'));
    }

    public function founding_members()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $founding_members = FoundingMembers::all();
        return view('frontend.founding_members.founding_member', compact('founding_members','posts'));
    }


    public function supervisoryboard()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $supervisoryboard = SupervisoryBoard::all();
        return view('frontend.supervisoryboard.supervisoryboard', compact('supervisoryboard','posts'));
    }
    public function advisory()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $advisory = AdvisoryBoard::all();
        return view('frontend.advisory.advisory', compact('advisory','posts'));
    }

    public function boardofdirectory()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $boardofdirectory = BoardofDirectors::all();
        return view('frontend.boardofdirectory.boardofdirectory', compact('boardofdirectory','posts'));
    }




    public function events()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $events = Event::orderBy("id", "desc")->paginate(6);
        return view('frontend.events.events', compact('events','posts'));
    }




    public function event(Event $event)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        return view('frontend.events.event-single', compact('event','posts'));
    }







    public function companies(Company $companies)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $companies = Company::all();




        return view('frontend.companies.companies', compact('companies','posts'));
    }


    /* public function companies()
    {

        $companies = Company::orderBy("id", "desc")->paginate(4);
        return view('frontend.companies.companies', compact('companies'));
    }*/
    public function companie(Company $companie)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        return view('frontend.companies.companie-single', compact('companie','posts'));
    }
    public function market(ShoppingModel $market)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        return view('frontend.markets.markets-single', compact('market','posts'));
    }

    public function sss(sss $sss)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


       $sss = sss::all();

        return view('frontend.sss', compact('sss','posts'));
    }




    public function terms_of_use()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $terms_of_use = StaticPages::where('id', 1)->select('t_title_tr', 't_text_tr')->get()->first();
        return view('frontend.terms-of-use', compact('terms_of_use','posts'));
    }




    public function privacy_policy()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $privacy_policy = StaticPages::where('id', 1)->select('p_title_tr', 'p_text_tr')->get()->first();
        return view('frontend.privacy-policy', compact('privacy_policy','posts'));
    }



    public function board_of_directors()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $members = User::Where('is_board', 1)->get();
        return view('frontend.board-of-directors', compact('members','posts'));
    }





    public function gallery()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $galleries = Gallery::orderBy("id", "desc")->paginate(9);
        return view('frontend.gallery', compact('galleries','posts'));
    }




    public function member_posting_single(Advert $advert)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $advert = Advert::orderBy("id", "desc")->paginate(9);

        return view('frontend.member_postings.member_posting-single', compact('advert','posts'));
    }


    public function shopping()
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        $shopping = ShoppingModel::all();
        return view('frontend.shopping.shopping', compact('shopping','posts'));
    }
    public function shoppings(ShoppingModel $shoppings)
    {
                $posts = post::orderBy("id", "desc")->paginate(6);


        return view('frontend.shopping.shopping-single', compact('shoppings','posts'));
    }
}
