@extends('layout.default')

@push('page.css')

<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/initcarousel-1.css') }}">
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
            <div class=" editor-area item-invitation -portrait editor-section" id="edit-area" style="height: 0px;">
                <div class="box1 editorTab tabFront active" tab="front" style="float: left; width: 489px;">
                    <div class="editorFrameContainer card-shadow" style="height: 705px;">
                        <div class="editorFrame ui-droppable" id="editorFrame">
                            <div class="card_decor decor_full_image"><img src="/inviteImgs/Backgrounds/Floral-Swirls_8.png"></div>
                            
                            

                            <div data-id="1" class="card_decor slot slot_text freesize dark-text-bg" style="left: 166.778px; top: 90.9787px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -7.5px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 17px; line-height: 18px; width: 167px; height: 18px;font-weight: bold;">You are invited to the</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            
                            <div data-id="2" class="card_decor slot slot_text freesize dark-text-bg" style="left: 159.167px; top: 121.515px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -24px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: mountainsof_christmas; font-size: 50px; line-height: 67.2px; width: 207px; height: 67.2px;font-weight: bold;">Wedding</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            
                            <div data-id="3" class="card_decor slot slot_text freesize dark-text-bg" style="left: 173.167px; top: 198.543px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -8px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 18px; line-height: 19.2px; width: 157px; height: 21.2px;font-weight: bold;">joining the lives of</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            
                            <div data-id="4" class="card_decor slot slot_text freesize dark-text-bg" style="left: 111.7778px; top: 241.997px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -17px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: great_vibesregular; font-size: 36px; line-height: 47.6px; width: 299px; height: 47.6px;font-weight: bold;">Miss Autumn Mercer</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            
                            <div data-id="5" class="card_decor slot slot_text freesize dark-text-bg" style="left: 167.778px; top: 400.998px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -8px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 18px; line-height: 19.2px; width: 167px; height: 114px;font-weight: bold;">Saturday. May 24th at 2:00p.m. 
                                Grace Church 432 Thurston Ave. Greentown
                                </textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            
                            <div data-id="6" class="card_decor slot slot_text freesize dark-text-bg" style="left: 236.778px; top: 295.998px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -11.5px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 25px; line-height: 27.6px; width: 46px; height: 27.6px;font-weight: bold;">&</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            
                            <div data-id="7" class="card_decor slot slot_text freesize dark-text-bg" style="left: 112.7778px; top: 325px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -16.5px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: great_vibesregular; font-size: 35px; line-height: 46.2px; width: 299px; height: 46.2px;font-weight: bold;">Mr. Alexander Shiloh</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            
                            <div data-id="8" class="card_decor slot slot_text freesize dark-text-bg" style="left: 181.778px; top: 558.997px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -6.5px;">
                                <textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 15px; line-height: 15.6px; width: 133px; height: 15.6px;font-weight: bold;">Reception to follow</textarea>
                                <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="box2">
                   
                    <!-- <div class="controlbox backimgclr box">
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
                        <div class="overlay">
                        </div>
                    </div> -->

                    <div class="controlbox layoutclr">
                        <div class="textcontmsg">
                            <p> Style Your Layout </p> </div>
                        <ul>
                                <li>
                                <!-- <input id="font" type="text" /> -->
                                <div class="box-content">
                                        <div class="drop_container">
                                            <div class="selected" id="selected">
                                                <p><span style="font-family: great_vibesregular; font-size: 17px;">Great Vibes</span></p><span class="dropdown_arrow"></span></div>
                                                
                                            <ul class="options custom_scroll custom_scrollbar" style="position: absolute; display: none;" id="editor-fonts">
                                                <li><span style="font-family: arimoregular; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px 0px / 340px 1080px no-repeat;" id="span_font_sel_arimoregular">Arimo</span></li>
                                                <li><span style="font-family: texgyretermesregular; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -30px / 340px 1080px no-repeat;" id="span_font_sel_texgyretermesregular">TeXGyreTermes</span></li>
                                                <li class="active"><span style="font-family: great_vibesregular; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -60px / 340px 1080px no-repeat;" id="span_font_sel_great_vibesregular">Great Vibes</span></li>
                                               
                                                <li><span style="font-family: open_sanscondensed_light; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -120px / 340px 1080px no-repeat;" id="span_font_sel_open_sanscondensed_light">Open Sans</span></li>
                                                <li><span style="font-family: open_sans_condensedbold; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -150px / 340px 1080px no-repeat;" id="span_font_sel_open_sans_condensedbold">Open Sans Bold</span></li>
                                                
                                                <li><span style="font-family: mountainsof_christmas; font-size: 15px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -210px / 340px 1080px no-repeat;" id="span_font_sel_mountains_of_christmas">Mountains Of Chr..</span></li>
                                                <li><span style="font-family: Quicksand; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -240px / 340px 1080px no-repeat;" id="span_font_sel_quicksand">Quicksand</span></li>
                                                <li><span style="font-family: Quicksand-Bold; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -270px / 340px 1080px no-repeat;" id="span_font_sel_quicksand-bold">Quicksand Bold</span></li>
                                               
                                                <li><span style="font-family: Parisienne; font-size: 19px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -330px / 340px 1080px no-repeat;" id="span_font_sel_parisienne">Parisienne</span></li>
                                                <li><span style="font-family: patrick_hand; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -360px / 340px 1080px no-repeat;" id="span_font_sel_patrick_hand">Patrick Hand</span></li>
                                                <li><span style="font-family: spicy_rice; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -390px / 340px 1080px no-repeat;" id="span_font_sel_spicy_rice">Spicy Rice</span></li>
                                                <li><span style="font-family: jennasue; font-size: 20px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -420px / 340px 1080px no-repeat;" id="span_font_sel_jenna_sue">Jenna Sue</span></li>
                                                <li><span style="font-family: JosefinSlab-SemiBold; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -450px / 340px 1080px no-repeat;" id="span_font_sel_josefinslab-semibold">Josefin Slab</span></li>
                                                <li><span style="font-family: luckiestguy; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -480px / 340px 1080px no-repeat;" id="span_font_sel_luckiest_guy">Luckiest Guy</span></li>
                                                <li><span style="font-family: Lato; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -510px / 340px 1080px no-repeat;" id="span_font_sel_lato">Lato</span></li>
                                                <li><span style="font-family: Cinzel; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -540px / 340px 1080px no-repeat;" id="span_font_sel_cinzel">Cinzel</span></li>
                                                <li><span style="font-family: amatic_scregular; font-size: 19px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -570px / 340px 1080px no-repeat;" id="span_font_sel_amatic_scregular">Amatic SC</span></li>
                                                <li><span style="font-family: lobster_regular; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -600px / 340px 1080px no-repeat;" id="span_font_sel_lobster_regular">Lobster</span></li>
                                                <li><span style="font-family: merriweatherbold_italic; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -630px / 340px 1080px no-repeat;" id="span_font_sel_merriweatherbold_italic">Merri Weather</span></li>
                                                <li><span style="font-family: ChopinScript; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -660px / 340px 1080px no-repeat;" id="span_font_sel_chopinscript">Chopin Script</span></li>
                                                <li><span style="font-family: Courgette-Regular; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -690px / 340px 1080px no-repeat;" id="span_font_sel_courgette-regular">Courgette</span></li>
                                                <li><span style="font-family: rozha_one_regular; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -720px / 340px 1080px no-repeat;" id="span_font_sel_rozha_one_regular">Rozha One</span></li>
                                                <li><span style="font-family: alex_brush; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -750px / 340px 1080px no-repeat;" id="span_font_sel_alex_brush">Alex Brush</span></li>
                                                <li><span style="font-family: aspiredemibold; font-size: 24px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -780px / 340px 1080px no-repeat;" id="span_font_sel_aspiredemibold">Aspire</span></li>
                                                <li><span style="font-family: angelina; font-size: 20px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -810px / 340px 1080px no-repeat;" id="span_font_sel_angelina">Angelina</span></li>
                                                <li><span style="font-family: Meddon; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -840px / 340px 1080px no-repeat;" id="span_font_sel_meddon">Meddon</span></li>
                                                <li><span style="font-family: Yesteryear; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -870px / 340px 1080px no-repeat;" id="span_font_sel_yesteryear">Yesteryear</span></li>
                                                <li><span style="font-family: ardecoregular; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -900px / 340px 1080px no-repeat;" id="span_font_sel_ardecoregular">Ardeco</span></li>
                                                <li><span style="font-family: Sail; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -930px / 340px 1080px no-repeat;" id="span_font_sel_sail">Sail</span></li>
                                                <li><span style="font-family: VastShadow; font-size: 15px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -960px / 340px 1080px no-repeat;" id="span_font_sel_vast_shadow">Vast Shadow</span></li>
                                                <li> <span style="font-family: RibeyeMarrow; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -990px / 340px 1080px no-repeat;" id="span_font_sel_ribeye_marrow">Ribeye Marrow</span></li>
                                                <li><span style="font-family: LetsTrace; font-size: 24px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -1020px / 340px 1080px no-repeat;" id="span_font_sel_letstrace">Lets Trace</span></li>
                                                <li><span style="font-family: Intuitive; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -1050px / 340px 1080px no-repeat;" id="span_font_sel_intuitive">Intuitive</span></li>
                                            </ul>
                                        </div>
                                    </div>
                            </li>

                            <li style="border-bottom: 1px solid #e8e8e8;">
                                <div class="colors" >
                                    <input id="cr_0" type="radio" name="color">
                                    <label class="lblfix text-color " for="cr_0">
                                        <span class="color-thumb" style="background-color: #000000"></span>
                                    </label>
                                    <input id="cr_1" type="radio" name="color" checked="ture">
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
                                    
                                    <label class="lblfix text-color" id="hide_show_clr_but" ><i class="fa fa-fw fa-ellipsis-h"></i></label>

                                    <div class="" id="displaymoreclr" style="display: none;">
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

                            <li style="text-align: center;display: block;font-size: 18px;border-bottom: 1px solid #e8e8e8;height: 38px;">
                               
                                <a href="javascript:;">
                                    <lable class="leftaligh aligns" id="align-left" >
                                        <i class="fa fa-fw fa-align-left"></i>
                                    </lable>
                                </a>
                                <a href="javascript:;">
                                    <lable class="centerligh aligns active" id="align-center" >
                                        <i class="fa fa-fw fa-align-center"></i>
                                    </lable>
                                </a>
                                <a href="javascript:;" style="border-right: 1px solid #e8e8e8;">
                                    <lable class="centerligh aligns" id="align-right" >
                                        <i class="fa fa-fw fa-align-right"></i>
                                    </lable>
                                </a>
                                <a href="javascript:;">
                                    <lable class="centerligh aligns1 active" id="fa-bold" >
                                        <i class="fa fa-fw fa-bold"></i>
                                    </lable>
                                </a>
                                <a href="javascript:;" >
                                    <lable class="rightligh aligns1" style="margin-right: 0px; " id="fa-italic" >
                                        <i class="fa fa-fw fa-italic"></i>
                                    </lable>
                                </a>
                            </li>

                            <li>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="add_text" name="add_text" placeholder="Add Text ...">
                                    <span class="input-group-addon" style="cursor: pointer;" id="add_new_text"><i class="fa fa-fw fa-plus"></i></span>
                                </div>
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

                <div class="controlbox box" style="z-index: 1000000;display: none;" id="style_message">
                    <div class="textcontmsg">
                        <p> Style Your Message </p> 
                    </div>
                    <ul>
                        <li>
                            <div class="box-content">
                                    <div class="drop_container">
                                        <div class="selected" id="selected2">
                                            <p><span style="font-family: great_vibesregular; font-size: 17px;">Great Vibes</span></p><span class="dropdown_arrow"></span></div>
                                            
                                        <ul class="options custom_scroll custom_scrollbar" style="position: absolute; display: none;" id="editor-fonts2">
                                            <li><span style="font-family: arimoregular; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px 0px / 340px 1080px no-repeat;" id="span_font_sel_arimoregular">Arimo</span></li>
                                            <li><span style="font-family: texgyretermesregular; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -30px / 340px 1080px no-repeat;" id="span_font_sel_texgyretermesregular">TeXGyreTermes</span></li>
                                            <li class="active"><span style="font-family: great_vibesregular; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -60px / 340px 1080px no-repeat;" id="span_font_sel_great_vibesregular">Great Vibes</span></li>
                                            
                                            <li><span style="font-family: open_sanscondensed_light; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -120px / 340px 1080px no-repeat;" id="span_font_sel_open_sanscondensed_light">Open Sans</span></li>
                                            <li><span style="font-family: open_sans_condensedbold; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -150px / 340px 1080px no-repeat;" id="span_font_sel_open_sans_condensedbold">Open Sans Bold</span></li>
                                            
                                            <li><span style="font-family: mountainsof_christmas; font-size: 15px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -210px / 340px 1080px no-repeat;" id="span_font_sel_mountains_of_christmas">Mountains Of Chr..</span></li>
                                            <li><span style="font-family: Quicksand; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -240px / 340px 1080px no-repeat;" id="span_font_sel_quicksand">Quicksand</span></li>
                                            <li><span style="font-family: Quicksand-Bold; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -270px / 340px 1080px no-repeat;" id="span_font_sel_quicksand-bold">Quicksand Bold</span></li>
                                           
                                            <li><span style="font-family: Parisienne; font-size: 19px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -330px / 340px 1080px no-repeat;" id="span_font_sel_parisienne">Parisienne</span></li>
                                            <li><span style="font-family: patrick_hand; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -360px / 340px 1080px no-repeat;" id="span_font_sel_patrick_hand">Patrick Hand</span></li>
                                            <li><span style="font-family: spicy_rice; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -390px / 340px 1080px no-repeat;" id="span_font_sel_spicy_rice">Spicy Rice</span></li>
                                            <li><span style="font-family: jennasue; font-size: 20px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -420px / 340px 1080px no-repeat;" id="span_font_sel_jenna_sue">Jenna Sue</span></li>
                                            <li><span style="font-family: JosefinSlab-SemiBold; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -450px / 340px 1080px no-repeat;" id="span_font_sel_josefinslab-semibold">Josefin Slab</span></li>
                                            <li><span style="font-family: luckiestguy; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -480px / 340px 1080px no-repeat;" id="span_font_sel_luckiest_guy">Luckiest Guy</span></li>
                                            <li><span style="font-family: Lato; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -510px / 340px 1080px no-repeat;" id="span_font_sel_lato">Lato</span></li>
                                            <li><span style="font-family: Cinzel; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -540px / 340px 1080px no-repeat;" id="span_font_sel_cinzel">Cinzel</span></li>
                                            <li><span style="font-family: amatic_scregular; font-size: 19px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -570px / 340px 1080px no-repeat;" id="span_font_sel_amatic_scregular">Amatic SC</span></li>
                                            <li><span style="font-family: lobster_regular; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -600px / 340px 1080px no-repeat;" id="span_font_sel_lobster_regular">Lobster</span></li>
                                            <li><span style="font-family: merriweatherbold_italic; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -630px / 340px 1080px no-repeat;" id="span_font_sel_merriweatherbold_italic">Merri Weather</span></li>
                                            <li><span style="font-family: ChopinScript; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -660px / 340px 1080px no-repeat;" id="span_font_sel_chopinscript">Chopin Script</span></li>
                                            <li><span style="font-family: Courgette-Regular; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -690px / 340px 1080px no-repeat;" id="span_font_sel_courgette-regular">Courgette</span></li>
                                            <li><span style="font-family: rozha_one_regular; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -720px / 340px 1080px no-repeat;" id="span_font_sel_rozha_one_regular">Rozha One</span></li>
                                            <li><span style="font-family: alex_brush; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -750px / 340px 1080px no-repeat;" id="span_font_sel_alex_brush">Alex Brush</span></li>
                                            <li><span style="font-family: aspiredemibold; font-size: 24px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -780px / 340px 1080px no-repeat;" id="span_font_sel_aspiredemibold">Aspire</span></li>
                                            <li><span style="font-family: angelina; font-size: 20px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -810px / 340px 1080px no-repeat;" id="span_font_sel_angelina">Angelina</span></li>
                                            <li><span style="font-family: Meddon; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -840px / 340px 1080px no-repeat;" id="span_font_sel_meddon">Meddon</span></li>
                                            <li><span style="font-family: Yesteryear; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -870px / 340px 1080px no-repeat;" id="span_font_sel_yesteryear">Yesteryear</span></li>
                                            <li><span style="font-family: ardecoregular; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -900px / 340px 1080px no-repeat;" id="span_font_sel_ardecoregular">Ardeco</span></li>
                                            <li><span style="font-family: Sail; font-size: 18px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -930px / 340px 1080px no-repeat;" id="span_font_sel_sail">Sail</span></li>
                                            <li><span style="font-family: VastShadow; font-size: 15px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -960px / 340px 1080px no-repeat;" id="span_font_sel_vast_shadow">Vast Shadow</span></li>
                                            <li><span style="font-family: RibeyeMarrow; font-size: 17px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -990px / 340px 1080px no-repeat;" id="span_font_sel_ribeye_marrow">Ribeye Marrow</span></li>
                                            <li><span style="font-family: LetsTrace; font-size: 24px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -1020px / 340px 1080px no-repeat;" id="span_font_sel_letstrace">Lets Trace</span></li>
                                            <li><span style="font-family: Intuitive; font-size: 16px; background: url({{ asset('img/sprite_fonts.png') }}) 0px -1050px / 340px 1080px no-repeat;" id="span_font_sel_intuitive">Intuitive</span></li>
                                        </ul>
                                    </div>
                                </div>
                        </li>

                        <li>
                            <span class="smalla">A <i class="fa fa-fw fa-sort-desc"></i></span>
                            <input type="range" value="0" step="2" min="0" max="80" id="stroke-width" class="fontsizebar" >
                            <span class="biga">A <i class="fa fa-fw fa-sort-up"></i></span>

                        </li>

                        <li style="border-bottom: 1px solid #e8e8e8;">
                            <div class="colors2" >
                                <input id="cr_n0" type="radio" name="color2">
                                <label class="lblfix text-color " for="cr_n0">
                                    <span class="color-thumb" style="background-color: #000000"></span>
                                </label>
                                <input id="cr_n1" type="radio" name="color2" checked="ture">
                                <label class="lblfix text-color " for="cr_n1">
                                    <span class="color-thumb" style="background-color: #ffffff"></span>
                                </label>
                                <input id="cr_n2" type="radio" name="color2">
                                <label class="lblfix text-color " for="cr_n2">
                                    <span class="color-thumb" style="background-color: #bababa"></span>
                                </label>
                                <input id="cr_n3" type="radio" name="color2">
                                <label class="lblfix text-color " for="cr_n3">
                                    <span class="color-thumb" style="background-color: #bc9620"></span>
                                </label>
                                <input id="cr_n4" type="radio" name="color2">
                                <label class="lblfix text-color " for="cr_n4">
                                    <span class="color-thumb" style="background-color: #FFB400"></span>
                                </label>
                                
                                <label class="lblfix text-color" id="hide_show_clr_but2"><i class="fa fa-fw fa-ellipsis-h"></i></label>

                                <div class="" id="displaymoreclr2" style="display: none;">
                                    <input id="cr_n5" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n5">
                                        <span class="color-thumb" style="background-color: #E53D39"></span>
                                    </label>
                                    <input id="cr_n6" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n6">
                                        <span class="color-thumb" style="background-color: #2C91DE"></span>
                                    </label>
                                    <input id="cr_n8" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n8">
                                        <span class="color-thumb" style="background-color: #970E65"></span>
                                    </label>
                                    <input id="cr_n9" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n9">
                                        <span class="color-thumb" style="background-color: #650633"></span>
                                    </label>
                                    <input id="cr_n10" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n10">
                                        <span class="color-thumb" style="background-color: #F3A2A3"></span>
                                    </label>
                                    <input id="cr_n11" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n11">
                                        <span class="color-thumb" style="background-color: #D44F70"></span>
                                    </label>
                                    <input id="cr_n12" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n12">
                                        <span class="color-thumb" style="background-color: #CA0B15"></span>
                                    </label>
                                    <input id="cr_n13" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n13">
                                        <span class="color-thumb" style="background-color: #97070E"></span>
                                    </label>
                                    <input id="cr_n14" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n14">
                                        <span class="color-thumb" style="background-color: #650508"></span>
                                    </label>
                                    <input id="cr_n15" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n15">
                                        <span class="color-thumb" style="background-color: #F35D19"></span>
                                    </label>
                                    <input id="cr_n16" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n16">
                                        <span class="color-thumb" style="background-color: #9E5727"></span>
                                    </label>
                                    <input id="cr_n17" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n17">
                                        <span class="color-thumb" style="background-color: #D8B571"></span>
                                    </label>
                                    <input id="cr_n18" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n18">
                                        <span class="color-thumb" style="background-color: #978454"></span>
                                    </label>
                                    <input id="cr_n19" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n19">
                                        <span class="color-thumb" style="background-color: #65320C"></span>
                                    </label>
                                    <input id="cr_n20" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n20">
                                        <span class="color-thumb" style="background-color: #8793D6"></span>
                                    </label>
                                    <input id="cr_n21" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n21">
                                        <span class="color-thumb" style="background-color: #866AA5"></span>
                                    </label>
                                    <input id="cr_n22" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n22">
                                        <span class="color-thumb" style="background-color: #552978"></span>
                                    </label>
                                    <input id="cr_n23" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n23">
                                        <span class="color-thumb" style="background-color: #1D549F"></span>
                                    </label>
                                    <input id="cr_n24" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n24">
                                        <span class="color-thumb" style="background-color: #073464"></span>
                                    </label>
                                    <input id="cr_n25" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n25">
                                        <span class="color-thumb" style="background-color: #55B2AE"></span>
                                    </label>
                                    <input id="cr_n26" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n26">
                                        <span class="color-thumb" style="background-color: #686868"></span>
                                    </label>
                                    <input id="cr_n27" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n27">
                                        <span class="color-thumb" style="background-color: #D5D5D5"></span>
                                    </label>
                                    <input id="cr_n28" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n28">
                                        <span class="color-thumb" style="background-color: #FFFAA3"></span>
                                    </label>
                                    <input id="cr_n29" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n29">
                                        <span class="color-thumb" style="background-color: #C0CFAF"></span>
                                    </label>
                                    <input id="cr_n30" type="radio" name="color2">
                                    <label class="lblfix text-color " for="cr_n30">
                                        <span class="color-thumb" style="background-color: #469E57"></span>
                                    </label>
                                </div>

                            </div>
                        </li>

                        <li style="text-align: center;display: block;font-size: 18px;height: 38px;">
                           
                            <a href="javascript:;">
                                <lable class="leftaligh aligns" id="align-left2" >
                                    <i class="fa fa-fw fa-align-left"></i>
                                </lable>
                            </a>
                            <a href="javascript:;">
                                <lable class="centerligh aligns active" id="align-center2" >
                                    <i class="fa fa-fw fa-align-center"></i>
                                </lable>
                            </a>
                            <a href="javascript:;" style="border-right: 1px solid #e8e8e8;">
                                <lable class="centerligh aligns" id="align-right2" >
                                    <i class="fa fa-fw fa-align-right"></i>
                                </lable>
                            </a>
                            <a href="javascript:;">
                                <lable class="centerligh aligns1 active" id="fa-bold2" >
                                    <i class="fa fa-fw fa-bold"></i>
                                </lable>
                            </a>
                            <a href="javascript:;" >
                                <lable class="rightligh aligns1" style="margin-right: 0px; " id="fa-italic2" >
                                    <i class="fa fa-fw fa-italic"></i>
                                </lable>
                            </a>
                        </li>
                    </ul>                        
                    <div class="pu_side_arrow left" style="margin-top: -5px;"></div>
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

<script>
$(function() {

    $( ".card_decor" ).draggable();
    localStorage.clear();

    $("#hide_show_clr_but").click(function(){
        $("#displaymoreclr").toggle(120);
    });

    $("#hide_show_clr_but2").click(function(){
        $("#displaymoreclr2").toggle(120);
    });

    $("#selected").click(function(){
        $("#editor-fonts").toggle(120);
    });

    $("#selected2").click(function(){
        $("#editor-fonts2").toggle(120);
    });
    
    // Style Layout script //
    $(".colors label").click(function(){
        var color = $(this).find(".color-thumb").css('background-color');
        $('.textarea_style').css({"color": color});
    });

    $("#editor-fonts li").click(function(){
        $(this).parent().find('li').removeClass('active');
        $(this).addClass('active');
        var text = $(this).text();
        var font_family = $(this).find('span').css('font-family');
        $('#selected p span').text(text).css({"font-family": font_family});
        $('.textarea_style').css({"font-family": font_family});
    });

    $("#align-left").click(function(){
        $(this).parent().parent().find('a lable.aligns').removeClass('active');
        $(this).addClass('active');
        $('.textarea_style').css({"text-align": "left"});

    });

    $("#align-center").click(function(){
        $(this).parent().parent().find('a lable.aligns').removeClass('active');
        $(this).addClass('active');
        $('.textarea_style').css({"text-align": "center"});
    });

    $("#align-right").click(function(){
        $(this).parent().parent().find('a lable.aligns').removeClass('active');
        $(this).addClass('active');
        $('.textarea_style').css({"text-align": "right"});
    });

    $("#fa-bold").click(function(){
        $(this).toggleClass('active');
        if($(this).hasClass( "active" )) {
            $('.textarea_style').css({"font-weight": "bold"});
        } else {
            $('.textarea_style').css({"font-weight": "normal"});
        }
    });

    $("#fa-italic").click(function(){
        $(this).toggleClass('active');
        if($(this).hasClass( "active" )) {
            $('.textarea_style').css({"font-style": "italic"});
        } else {
            $('.textarea_style').css({"font-style": "normal"});
        }
    });
});


$(document).on('click', '#add_new_text', function() {
    var text = 'New Text';

    if($('#add_text').val() != '') text = $('#add_text').val();
    var html = '<div class="card_decor slot slot_text freesize dark-text-bg" style="left: 166.778px; top: 40px; outline-color: rgba(255, 255, 255, 0.95); margin-left: -7.5px;"><textarea class="textarea_style" placeholder=" " style="text-align: center; color: rgb(255, 255, 255); font-family: merriweatherbold_italic; font-size: 17px; line-height: 18px; width: 167px; height: 18px;font-weight: bold;">'+text+'</textarea> <a class="delete_handle" sticky_handle="sw" style="left: -15px; bottom: -15px;"></a></div>';
    $('.editorFrame').append(html);
    $( ".card_decor" ).draggable();
    $('#add_text').val('');  
});

// Syle Your Message //
$(document).on('click', '.card_decor', function() {
    var msg = $(this);
    msg.parent().find('.card_decor').find('.delete_handle').hide();
    msg.find('.delete_handle').show(50);
    
    // Dispaly Style Ur Message Dynamically //
    var top = $(this).css('top').replace("px", "");
    var left = $(this).css('left').replace("px", "");
    var width = $(this).find('textarea').css('width').replace("px", "");
    left = ( parseFloat(left) + parseFloat(width) ) + parseFloat('-490');
    top = parseFloat(top)  + parseFloat('-838');
    $('#style_message').css({"top": top, "left": left}).show('fade', 500 );

    //Storing current element into local store //
    var msgId = msg.data("id");

    if(localStorage.getItem(msgId) === null ) {
        var itemVals = [ msg.find('textarea').css('font-size').replace("px", ""), msg.find('textarea').css('width').replace("px", ""), msg.find('textarea').css('height').replace("px", "") ];
        localStorage.setItem(msgId, JSON.stringify(itemVals));
    }
    localStorage.setItem("currentDataId", msgId);
});

$(document).on('click', '#editor-fonts2 li', function() {
    var currentElement = $("#editorFrame").find(`[data-id='${localStorage.currentDataId}']`).find('textarea');
    $(this).parent().find('li').removeClass('active');
    $(this).addClass('active');
    var text = $(this).text();
    var font_family = $(this).find('span').css('font-family');
    $('#selected2 p span').text(text).css({"font-family": font_family});
    currentElement.css({"font-family": font_family});
});

$(document).on('click', '.colors2 label', function() {
    var currentElement = $("#editorFrame").find(`[data-id='${localStorage.currentDataId}']`).find('textarea');
    var color = $(this).find(".color-thumb").css('background-color');
    currentElement.css({"color": color});
});

$(document).on('click', '#align-left2', function() {
    var currentElement = $("#editorFrame").find(`[data-id='${localStorage.currentDataId}']`).find('textarea');
    $(this).parent().parent().find('a lable.aligns').removeClass('active');
    $(this).addClass('active');
    currentElement.css({"text-align": "left"});

});

$(document).on('click', '#align-center2', function() {
    var currentElement = $("#editorFrame").find(`[data-id='${localStorage.currentDataId}']`).find('textarea');
    $(this).parent().parent().find('a lable.aligns').removeClass('active');
    $(this).addClass('active');
    currentElement.css({"text-align": "center"});
});

$(document).on('click', '#align-right2', function() {
    var currentElement = $("#editorFrame").find(`[data-id='${localStorage.currentDataId}']`).find('textarea');
    $(this).parent().parent().find('a lable.aligns').removeClass('active');
    $(this).addClass('active');
    currentElement.css({"text-align": "right"});
});

$(document).on('click', '#fa-bold2', function() {
    var currentElement = $("#editorFrame").find(`[data-id='${localStorage.currentDataId}']`).find('textarea');
    $(this).toggleClass('active');
    if($(this).hasClass( "active" )) {
        currentElement.css({"font-weight": "bold"});
    } else {
        currentElement.css({"font-weight": "normal"});
    }
});

$(document).on('click', '#fa-italic2', function() {
    var currentElement = $("#editorFrame").find(`[data-id='${localStorage.currentDataId}']`).find('textarea');
    $(this).toggleClass('active');
    if($(this).hasClass( "active" )) {
        currentElement.css({"font-style": "italic"});
    } else {
        currentElement.css({"font-style": "normal"});
    }
});

// 
$('.fontsizebar').on("change mousemove", function() {
    var currentRange = $(this).val();
    var currentElement = $("#editorFrame").find(`[data-id='${localStorage.currentDataId}']`).find('textarea');
    var itmVals = JSON.parse(localStorage[localStorage.currentDataId] );

    var fontSize = parseInt(itmVals[0]) + parseInt(currentRange);
    var width = parseInt(itmVals[1]) + ( parseInt(currentRange) * parseInt('3') );
    var height = parseInt(itmVals[2]) + ( parseInt(currentRange) * parseInt('2') );

    currentElement.css({"font-size": fontSize+'px', "width": width+'px', "height": height+'px', "line-height": height+'px' });
});

// Delete Msg //
$(document).on('click', '.delete_handle', function() {
    $(this).closest('.card_decor').remove();
    $('#style_message').hide();
});

$(document).mouseup(function(e) 
{
    // Hide font dropdown //
    var container = $('#editor-fonts');
    var select = $('#selected');
    if (!container.is(e.target) && !select.is(e.target) && container.has(e.target).length === 0 && select.has(e.target).length === 0) 
    {
        container.hide();
    }

    var container2 = $('#editor-fonts2');
    var select2 = $('#selected2');
    if (!container2.is(e.target) && !select2.is(e.target) && container2.has(e.target).length === 0 && select2.has(e.target).length === 0) 
    {
        container2.hide();
    }

    // Hide delete Icon //
    var editorFrame = $('.editorFrame');
    if (!editorFrame.is(e.target) && editorFrame.has(e.target).length === 0 ) 
    {
        $('.delete_handle').hide();
    }

    // Hide Style Message section //
    var inviteMessage = $('#card_decor');
    var styleMessage = $('#style_message');
    if (!inviteMessage.is(e.target) && inviteMessage.has(e.target).length === 0 && !styleMessage.is(e.target) && styleMessage.has(e.target).length === 0 ) 
    {
        $('#style_message').hide();
    }

});

</script>

@endpush