@extends('layout.default')

@push('page.css')

<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/initcarousel-1.css') }}">
<style type="text/css">
@font-face {
    font-family: 'great_vibesregular';
    src: url('{{ asset('font/GreatVibes-Regular.ttf') }}');
}
@font-face {
    font-family: 'merriweatherbold_italic';
    src: url('{{ asset('font/Merriweather-Italic.ttf') }}');
}
</style>
@endpush

@section('content')
<!-- Full Width Column -->
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Customize
                <!-- <small>Example 2.0</small> -->
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">List</a></li>
                <li class="active">Customize</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class=" editor-area item-invitation -portrait editor-section" id="edit-area">
                <div class="box1 editorTab tabFront active" tab="front" style="float: left;">
                    <div class="editorFrameContainer card-shadow">
                        <div class="editorFrame ui-droppable" entity_id="11210">
                            <div class="card_decor decor_full_image"><img src="/inviteImgs/Backgrounds/Floral-Swirls_8.png"></div>
                            <div class="card_decor slot slot_text freesize dark-text-bg" entity_id="17445" style="left: 166.778px; top: 87.9787px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -7.5px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 15px; line-height: 18px; width: 163px; height: 18px;">You are invited to the</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            <div class="card_decor slot slot_text freesize dark-text-bg" entity_id="17446" style="left: 159.167px; top: 115.515px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -24px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: great_vibesregular; font-size: 48px; line-height: 67.2px; width: 203px; height: 67.2px;">Wedding</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            <div class="card_decor slot slot_text freesize dark-text-bg" entity_id="17447" style="left: 173.167px; top: 192.543px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -8px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 16px; line-height: 19.2px; width: 153px; height: 19.2px;">joining the lives of</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            <div class="card_decor slot slot_text freesize dark-text-bg" entity_id="17448" style="left: 111.7778px; top: 235.997px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -17px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: great_vibesregular; font-size: 34px; line-height: 47.6px; width: 295px; height: 47.6px;">Miss Autumn Mercer</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            <div class="card_decor slot slot_text freesize dark-text-bg" entity_id="17449" style="left: 167.778px; top: 393.998px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -8px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 16px; line-height: 19.2px; width: 163px; height: 114px;">Saturday. May 24th at 2:00p.m. Grace Church 432 Thurston Ave. Greentown
                                </textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            <div class="card_decor slot slot_text freesize dark-text-bg" entity_id="17450" style="left: 236.778px; top: 289.998px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -11.5px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 23px; line-height: 27.6px; width: 42px; height: 27.6px;">&</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            <div class="card_decor slot slot_text freesize dark-text-bg" entity_id="17451" style="left: 112.7778px; top: 320px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -16.5px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: great_vibesregular; font-size: 33px; line-height: 46.2px; width: 295px; height: 46.2px;">Mr. Alexander Shiloh</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            <div class="card_decor slot slot_text freesize dark-text-bg" entity_id="20586" style="left: 181.778px; top: 547.997px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -6.5px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 13px; line-height: 15.6px; width: 129px; height: 15.6px;">Reception to follow</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            <div class="card_decor decor_watermark" style="display:none"><img src="/Editor/images/watermark_invi.png"></div>
                        </div>
                    </div>
                </div>

                <div class="box2">
                   
                    <div class="controlbox backimgclr">
                        <div class="textcontmsg">
                            <p> Back Side Color </p> </div>
                        <ul>
                            <li>
                                <div class="colors" >
                                    <input id="bt_0" type="radio" name="backimg">
                                    <label class="lblfix text-backimg" for="bt_0">
                                        <span class="backimg-thumb" style="background-color: #000000"></span>
                                    </label>
                                    <input id="bt_1" type="radio" name="backimg">
                                    <label class="lblfix text-backimg" for="bt_1">
                                        <span class="backimg-thumb" style="background-color: #ffffff"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="controlbox layoutclr">
                        <div class="textcontmsg">
                            <p> Layout Color </p> </div>
                        <ul>
                            <li>
                                <div class="colors" >
                                    <input id="cr_0" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_0">
                                        <span class="color-thumb" style="background-color: #000000"></span>
                                    </label>
                                    <input id="cr_1" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_1">
                                        <span class="color-thumb" style="background-color: #ffffff"></span>
                                    </label>
                                    <input id="cr_2" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_2">
                                        <span class="color-thumb" style="background-color: #bababa"></span>
                                    </label>
                                    <input id="cr_3" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_3">
                                        <span class="color-thumb" style="background-color: #bc9620"></span>
                                    </label>
                                    <input id="cr_4" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_4">
                                        <span class="color-thumb" style="background-color: #FFB400"></span>
                                    </label>
                                    
                                    <label class="lblfix text-color hide_show_clr_but2" ><i class="fa fa-fw fa-ellipsis-h"></i></label>

                                    <div class="displaymoreclr2" style="display: none;">
                                        <input id="cr_5" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_5">
                                            <span class="color-thumb" style="background-color: #E53D39"></span>
                                        </label>
                                        <input id="cr_6" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_6">
                                            <span class="color-thumb" style="background-color: #2C91DE"></span>
                                        </label>
                                        <!-- <input id="cr_7" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_7">
                                            <span class="color-thumb" style="background-color: #000000"></span>
                                        </label> -->
                                        <input id="cr_8" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_8">
                                            <span class="color-thumb" style="background-color: #970E65"></span>
                                        </label>
                                        <input id="cr_9" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_9">
                                            <span class="color-thumb" style="background-color: #650633"></span>
                                        </label>
                                        <input id="cr_10" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_10">
                                            <span class="color-thumb" style="background-color: #F3A2A3"></span>
                                        </label>
                                        <input id="cr_11" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_11">
                                            <span class="color-thumb" style="background-color: #D44F70"></span>
                                        </label>
                                        <input id="cr_12" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_12">
                                            <span class="color-thumb" style="background-color: #CA0B15"></span>
                                        </label>
                                        <input id="cr_13" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_13">
                                            <span class="color-thumb" style="background-color: #97070E"></span>
                                        </label>
                                        <input id="cr_14" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_14">
                                            <span class="color-thumb" style="background-color: #650508"></span>
                                        </label>
                                        <input id="cr_15" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_15">
                                            <span class="color-thumb" style="background-color: #F35D19"></span>
                                        </label>
                                        <input id="cr_16" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_16">
                                            <span class="color-thumb" style="background-color: #9E5727"></span>
                                        </label>
                                        <input id="cr_17" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_17">
                                            <span class="color-thumb" style="background-color: #D8B571"></span>
                                        </label>
                                        <input id="cr_18" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_18">
                                            <span class="color-thumb" style="background-color: #978454"></span>
                                        </label>
                                        <input id="cr_19" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_19">
                                            <span class="color-thumb" style="background-color: #65320C"></span>
                                        </label>
                                        <input id="cr_20" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_20">
                                            <span class="color-thumb" style="background-color: #8793D6"></span>
                                        </label>
                                        <input id="cr_21" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_21">
                                            <span class="color-thumb" style="background-color: #866AA5"></span>
                                        </label>
                                        <input id="cr_22" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_22">
                                            <span class="color-thumb" style="background-color: #552978"></span>
                                        </label>
                                        <input id="cr_23" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_23">
                                            <span class="color-thumb" style="background-color: #1D549F"></span>
                                        </label>
                                        <input id="cr_24" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_24">
                                            <span class="color-thumb" style="background-color: #073464"></span>
                                        </label>
                                        <input id="cr_25" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_25">
                                            <span class="color-thumb" style="background-color: #55B2AE"></span>
                                        </label>
                                        <input id="cr_26" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_26">
                                            <span class="color-thumb" style="background-color: #686868"></span>
                                        </label>
                                        <input id="cr_27" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_27">
                                            <span class="color-thumb" style="background-color: #D5D5D5"></span>
                                        </label>
                                        <input id="cr_28" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_28">
                                            <span class="color-thumb" style="background-color: #FFFAA3"></span>
                                        </label>
                                        <input id="cr_29" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_29">
                                            <span class="color-thumb" style="background-color: #C0CFAF"></span>
                                        </label>
                                        <input id="cr_30" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_30">
                                            <span class="color-thumb" style="background-color: #469E57"></span>
                                        </label>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>

                     <div class="controlbox">
                        <div class="textcontmsg">
                            <p> Style Your Message </p> </div>
                        <ul>
                            <li>
                                <input id="font" type="text" />
                            </li>
                            <li>
                                <span class="smalla">A <i class="fa fa-fw fa-sort-desc"></i></span>
                                <input type="range" value="0" step="2" min="0" max="100" id="stroke-width" class="fontsizebar" >
                                <span class="biga">A <i class="fa fa-fw fa-sort-up"></i></span>

                            </li>

                            <li style="border-bottom: 1px solid #e8e8e8;">
                                <div class="colors" >
                                    <input id="cr_0" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_0">
                                        <span class="color-thumb" style="background-color: #000000"></span>
                                    </label>
                                    <input id="cr_1" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_1">
                                        <span class="color-thumb" style="background-color: #ffffff"></span>
                                    </label>
                                    <input id="cr_2" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_2">
                                        <span class="color-thumb" style="background-color: #bababa"></span>
                                    </label>
                                    <input id="cr_3" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_3">
                                        <span class="color-thumb" style="background-color: #bc9620"></span>
                                    </label>
                                    <input id="cr_4" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_4">
                                        <span class="color-thumb" style="background-color: #FFB400"></span>
                                    </label>
                                    
                                    <label class="lblfix text-color hide_show_clr_but" ><i class="fa fa-fw fa-ellipsis-h"></i></label>

                                    <div class="displaymoreclr" style="display: none;">
                                        <input id="cr_5" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_5">
                                            <span class="color-thumb" style="background-color: #E53D39"></span>
                                        </label>
                                        <input id="cr_6" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_6">
                                            <span class="color-thumb" style="background-color: #2C91DE"></span>
                                        </label>
                                        <!-- <input id="cr_7" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_7">
                                            <span class="color-thumb" style="background-color: #000000"></span>
                                        </label> -->
                                        <input id="cr_8" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_8">
                                            <span class="color-thumb" style="background-color: #970E65"></span>
                                        </label>
                                        <input id="cr_9" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_9">
                                            <span class="color-thumb" style="background-color: #650633"></span>
                                        </label>
                                        <input id="cr_10" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_10">
                                            <span class="color-thumb" style="background-color: #F3A2A3"></span>
                                        </label>
                                        <input id="cr_11" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_11">
                                            <span class="color-thumb" style="background-color: #D44F70"></span>
                                        </label>
                                        <input id="cr_12" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_12">
                                            <span class="color-thumb" style="background-color: #CA0B15"></span>
                                        </label>
                                        <input id="cr_13" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_13">
                                            <span class="color-thumb" style="background-color: #97070E"></span>
                                        </label>
                                        <input id="cr_14" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_14">
                                            <span class="color-thumb" style="background-color: #650508"></span>
                                        </label>
                                        <input id="cr_15" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_15">
                                            <span class="color-thumb" style="background-color: #F35D19"></span>
                                        </label>
                                        <input id="cr_16" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_16">
                                            <span class="color-thumb" style="background-color: #9E5727"></span>
                                        </label>
                                        <input id="cr_17" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_17">
                                            <span class="color-thumb" style="background-color: #D8B571"></span>
                                        </label>
                                        <input id="cr_18" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_18">
                                            <span class="color-thumb" style="background-color: #978454"></span>
                                        </label>
                                        <input id="cr_19" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_19">
                                            <span class="color-thumb" style="background-color: #65320C"></span>
                                        </label>
                                        <input id="cr_20" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_20">
                                            <span class="color-thumb" style="background-color: #8793D6"></span>
                                        </label>
                                        <input id="cr_21" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_21">
                                            <span class="color-thumb" style="background-color: #866AA5"></span>
                                        </label>
                                        <input id="cr_22" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_22">
                                            <span class="color-thumb" style="background-color: #552978"></span>
                                        </label>
                                        <input id="cr_23" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_23">
                                            <span class="color-thumb" style="background-color: #1D549F"></span>
                                        </label>
                                        <input id="cr_24" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_24">
                                            <span class="color-thumb" style="background-color: #073464"></span>
                                        </label>
                                        <input id="cr_25" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_25">
                                            <span class="color-thumb" style="background-color: #55B2AE"></span>
                                        </label>
                                        <input id="cr_26" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_26">
                                            <span class="color-thumb" style="background-color: #686868"></span>
                                        </label>
                                        <input id="cr_27" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_27">
                                            <span class="color-thumb" style="background-color: #D5D5D5"></span>
                                        </label>
                                        <input id="cr_28" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_28">
                                            <span class="color-thumb" style="background-color: #FFFAA3"></span>
                                        </label>
                                        <input id="cr_29" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_29">
                                            <span class="color-thumb" style="background-color: #C0CFAF"></span>
                                        </label>
                                        <input id="cr_30" type="radio" name="color">
                                        <label class="lblfix text-color " for="cr_30">
                                            <span class="color-thumb" style="background-color: #469E57"></span>
                                        </label>
                                    </div>

                                </div>
                            </li>

                            <li style="text-align: center;display: block;font-size: 18px;">
                               
                                <a href="#"><lable class="leftaligh"><i class="fa fa-fw fa-align-left"></i></lable></a>
                                <a href="#"><lable class="centerligh"><i class="fa fa-fw fa-align-center"></i></lable></a>
                                <a href="#" ><lable class="rightligh" style="margin-right: 0px; "><i class="fa fa-fw fa-align-right"></i></lable></a>

                            </li>
                            
                            
                            
                        </ul>
                    </div>


                </div>

                <div class="box3">
                    <div id="amazingcarousel-container-2">
                        <div id="amazingcarousel-2" style="display:none;position:relative;width:100%;max-width:180px;margin:0px auto 0px;">
                            <div class="amazingcarousel-list-container">
                                <ul class="amazingcarousel-list">
                                    <li class="amazingcarousel-item">
                                        <div class="amazingcarousel-item-container">
                                            <div class="amazingcarousel-image">
                                                <a href="#"><img src="makemyinvite_slider/vlcsnap-2017-05-11-00h01m13s983.png" alt="vlcsnap-2017-05-11-00h01m13s983" /></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="amazingcarousel-item">
                                        <div class="amazingcarousel-item-container">
                                            <div class="amazingcarousel-image">
                                                <a href="#"><img src="makemyinvite_slider/GD4XTAb.jpg" alt="GD4XTAb" /></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="amazingcarousel-item">
                                        <div class="amazingcarousel-item-container">
                                            <div class="amazingcarousel-image">
                                                <a href="#"><img src="makemyinvite_slider/dive_in-1280x1024.jpg" alt="dive_in-1280x1024" /></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="amazingcarousel-item">
                                        <div class="amazingcarousel-item-container">
                                            <div class="amazingcarousel-image">
                                                <a href="#"><img src="makemyinvite_slider/3d-wallpaper-dans-3d-hd-desktop-wallpapers-romania.jpg" alt="3d-wallpaper-dans-3d-hd-desktop-wallpapers-romania" /></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="amazingcarousel-item">
                                        <div class="amazingcarousel-item-container">
                                            <div class="amazingcarousel-image">
                                                <a href="#"><img src="makemyinvite_slider/midnight drift racing.jpg" alt="midnight drift racing" /></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="amazingcarousel-prev"></div>
                                <div class="amazingcarousel-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box4">
                    <div id="amazingcarousel-container-1">
                        <div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:180px;margin:0px auto 0px;">
                            <div class="amazingcarousel-list-container">
                                <ul class="amazingcarousel-list">
                                    <li class="amazingcarousel-item">
                                        <div class="amazingcarousel-item-container">
                                            <div class="amazingcarousel-image">
                                                <a href="#"><img src="makemyinvite_slider/vlcsnap-2017-05-11-00h01m13s983.png" alt="vlcsnap-2017-05-11-00h01m13s983" /></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="amazingcarousel-item">
                                        <div class="amazingcarousel-item-container">
                                            <div class="amazingcarousel-image">
                                                <a href="#"><img src="makemyinvite_slider/GD4XTAb.jpg" alt="GD4XTAb" /></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="amazingcarousel-item">
                                        <div class="amazingcarousel-item-container">
                                            <div class="amazingcarousel-image">
                                                <a href="#"><img src="makemyinvite_slider/dive_in-1280x1024.jpg" alt="dive_in-1280x1024" /></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="amazingcarousel-item">
                                        <div class="amazingcarousel-item-container">
                                            <div class="amazingcarousel-image">
                                                <a href="#"><img src="makemyinvite_slider/3d-wallpaper-dans-3d-hd-desktop-wallpapers-romania.jpg" alt="3d-wallpaper-dans-3d-hd-desktop-wallpapers-romania" /></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="amazingcarousel-item">
                                        <div class="amazingcarousel-item-container">
                                            <div class="amazingcarousel-image">
                                                <a href="#"><img src="makemyinvite_slider/midnight drift racing.jpg" alt="midnight drift racing" /></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="amazingcarousel-prev"></div>
                                <div class="amazingcarousel-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.container -->
</div>

@stop

@push('page.script')

<script src="{{ asset('js/amazingcarousel.js') }}"></script>
<script src="{{ asset('js/initcarousel-1.js') }}"></script>
<script src="{{ asset('js/jquery.fontselect.js') }}"></script>

<script>
$(function() {

    $('#font').fontselect().change(function() {

        // replace + signs with spaces for css
        var font = $(this).val().replace(/\+/g, ' ');

        // split font into family and weight
        font = font.split(':');

        // set family on paragraphs
        $('p').css('font-family', font[0]);
    });

    $(".hide_show_clr_but").click(function(){
        $(".displaymoreclr").toggle(120);
    });

    $(".hide_show_clr_but2").click(function(){
        $(".displaymoreclr2").toggle(120);
    });

});
</script>

@endpush