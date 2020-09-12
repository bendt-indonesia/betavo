<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/css">
        * {
            -ms-text-size-adjust:100%;
            -webkit-text-size-adjust:none;
            -webkit-text-resize:100%;
            text-resize:100%;
        }
        a{
            outline:none;
            color:#40aceb;
            text-decoration:underline;
        }
        a:hover{text-decoration:none !important;}
        .nav a:hover{text-decoration:underline !important;}
        .title a:hover{text-decoration:underline !important;}
        .title-2 a:hover{text-decoration:underline !important;}
        .btn:hover{opacity:0.8;}
        .btn a:hover{text-decoration:none !important;}
        .btn{
            -webkit-transition:all 0.3s ease;
            -moz-transition:all 0.3s ease;
            -ms-transition:all 0.3s ease;
            transition:all 0.3s ease;
        }
        table td {border-collapse: collapse !important;}
        .ExternalClass, .ExternalClass a, .ExternalClass span, .ExternalClass b, .ExternalClass br, .ExternalClass p, .ExternalClass div{line-height:inherit;}
        @media only screen and (max-width:500px) {
            table[class="flexible"]{width:100% !important;}
            table[class="center"]{
                float:none !important;
                margin:0 auto !important;
            }
            *[class="hide"]{
                display:none !important;
                width:0 !important;
                height:0 !important;
                padding:0 !important;
                font-size:0 !important;
                line-height:0 !important;
            }
            td[class="img-flex"] img{
                width:100% !important;
                height:auto !important;
            }
            td[class="aligncenter"]{text-align:center !important;}
            th[class="flex"]{
                display:block !important;
                width:100% !important;
            }
            td[class="wrapper"]{padding:0 !important;}
            td[class="holder"]{padding:30px 15px 20px !important;}
            td[class="nav"]{
                padding:20px 0 0 !important;
                text-align:center !important;
            }
            td[class="h-auto"]{height:auto !important;}
            td[class="description"]{padding:30px 20px !important;}
            td[class="i-120"] img{
                width:120px !important;
                height:auto !important;
            }
            td[class="footer"]{padding:5px 20px 20px !important;}
            td[class="footer"] td[class="aligncenter"]{
                line-height:25px !important;
                padding:20px 0 0 !important;
            }
            tr[class="table-holder"]{
                display:table !important;
                width:100% !important;
            }
            th[class="thead"]{display:table-header-group !important; width:100% !important;}
            th[class="tfoot"]{display:table-footer-group !important; width:100% !important;}
        }
    </style>
</head>
<body style="margin:0; padding:0;" bgcolor="#eaeced">
<table style="min-width:320px;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#eaeced">
    <!-- fix for gmail -->
    <tr>
        <td class="hide">
            <table width="600" cellpadding="0" cellspacing="0" style="width:600px !important;">
                <tr>
                    <td style="min-width:600px; font-size:0; line-height:0;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="wrapper" style="padding:0 10px;">
            <!-- module 1 -->
            <table data-module="module-1" data-thumb="thumbnails/01.png" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td data-bgcolor="bg-module" bgcolor="#eaeced">
                        <table class="flexible" width="600" align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="padding:29px 0 30px;">
                                    <table width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <th class="flex" width="113" align="left" style="padding:0;">
                                                <table class="center" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td style="line-height:0;">
                                                            <a target="_blank" style="text-decoration:none;" href="{{url('/')}}"><img src="{{url('/images/logo.png')}}" border="0" align="left" vspace="0" hspace="0" /></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </th>
                                            <th class="flex" align="left" style="padding:0;">
                                                <table width="100%" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td data-color="text" data-size="size navigation" data-min="10" data-max="22" data-link-style="text-decoration:none; color:#888;" class="nav" align="right" style="font:bold 13px/15px Arial, Helvetica, sans-serif; color:#888;">
                                                            <a target="_blank" style="text-decoration:none; color:#888;" href="{{url('/')}}">Home</a> &nbsp; &nbsp; <a target="_blank" style="text-decoration:none; color:#888;" href="{{url('/about')}}">About</a> &nbsp; &nbsp; <a target="_blank" style="text-decoration:none; color:#888;" href="{{url('/contact')}}">Contact</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            @yield('content')

            <!-- module 7 -->
            <table data-module="module-7" data-thumb="thumbnails/07.png" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td data-bgcolor="bg-module" bgcolor="#eaeced">
                        <table class="flexible" width="600" align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="footer" style="padding:0 0 10px;">
                                    <table width="100%" cellpadding="0" cellspacing="0">
                                        <tr class="table-holder">
                                            <th class="tfoot" width="400" align="left" style="vertical-align:top; padding:0;">
                                                <table width="100%" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td data-color="text" data-link-color="link text color" data-link-style="text-decoration:underline; color:#797c82;" class="aligncenter" style="font:12px/16px Arial, Helvetica, sans-serif; color:#797c82; padding:0 0 10px;">
                                                            Copyright © {{env('COPY_YEAR')}} <a href="{{url('/')}}">{{env('APP_NAME')}}</a>. All rights reserved. @yield('subscribe')
                                                        </td>
                                                    </tr>
                                                </table>
                                            </th>
                                            <th class="thead" width="200" align="left" style="vertical-align:top; padding:0;">
                                                <table class="center" align="right" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        @if(CMSConfig::get('twitter') != "")
                                                            <td class="btn" valign="top" style="line-height:0; padding:3px 0 0;">
                                                                <a target="_blank" style="text-decoration:none;" href="{!! CMSConfig::get('twitter') !!}"><img src="{{url('images/icon/ico-twitter.png')}}" border="0" style="font:12px/15px Arial, Helvetica, sans-serif; color:#797c82;" align="left" vspace="0" hspace="0" width="13" height="13" alt="twitter" /></a>
                                                            </td>
                                                            <td width="20"></td>
                                                        @endif
                                                        @if(CMSConfig::get('facebook') != "")
                                                        <td class="btn" valign="top" style="line-height:0; padding:3px 0 0;">
                                                            <a target="_blank" style="text-decoration:none;" href="{!! CMSConfig::get('facebook') !!}"><img src="{{url('images/icon/ico-facebook.png')}}" border="0" style="font:12px/15px Arial, Helvetica, sans-serif; color:#797c82;" align="left" vspace="0" hspace="0" width="6" height="13" alt="fb" /></a>
                                                        </td>
                                                        <td width="20"></td>
                                                        @endif
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- fix for gmail -->
    <tr>
        <td style="line-height:0;"><div style="display:none; white-space:nowrap; font:15px/1px courier;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div></td>
    </tr>
</table>
</body>
</html>