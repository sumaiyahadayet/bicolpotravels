{{-- <p>I have some query like {{ $data['message'] }}.</p> --}}
{{-- <p>It would be appriciative, if you gone through this feedback.</p> --}}
<html>
<!-- ==============================================
* Name: Mobify Email Template
* Author: Alejandro Finy // 3E Studio
* Framework Version: 1.0
=============================================== -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <!-- CSS Reset -->
    <style type="text/css">
        html,
        body {
            margin: 0 !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* Forces Outlook.com to display emails full width. */
        .ExternalClass {
            width: 100%;
        }

        /* Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        table table table {
            table-layout: auto;
        }

        /* Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* Overrides styles added when Yahoo's auto-senses a link. */
        .yshortcuts a {
            border-bottom: none !important;
        }
         a[href] {
           color: #ffffff!important;
        }
        /* Another work-around for iOS meddling in triggered links. */
        a[x-apple-data-detectors] {
            color: white !important;
        }
        a[href] {
          color: #ffffff!important;
       }
       a[href] {
         color: #ffffff!important;
     }
    </style>

    <!-- Progressive Enhancements -->
    <style type="text/css">
        /* Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }

        .button-td:hover,
        .button-a:hover {
            background: #319ecb !important;
            border-color: #319ecb !important;
        }


        /* Media Queries */
        @media screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
            }
            .logop {
                margin-left: 170px!important;
           }
            .logo img{
                width: 22%;
                height: auto;
            }

            /* Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid,
            .fluid-centered {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* And center justify these ones. */
            .fluid-centered {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }

            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }

            /* Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }

            table.center-on-narrow {
                display: inline-block !important;
            }
        }
    </style>
</head>

<body bgcolor="#dbe9ff" width="100%" style="margin: 0;" yahoo="yahoo">
 @foreach(Emaild() as $emaild)
    <table bgcolor="#dbe9ff" cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" style="border-collapse:collapse;">
        <tr>
            <td>
                <center style="width: 100%;">

                    <!-- Visually Hidden Preheader Text : BEGIN -->
                    {{-- <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;"> (Optional) This text will appear in the inbox preview, but not the email body. </div> --}}
                    <!-- Visually Hidden Preheader Text : END -->

                    <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="600" class="email-container logo">
                        <tr>

                            <td style="display: inline-flex; padding: 8px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555; display: -webkit-inline-box;" class="logo">

                                <img src="{{asset('assets/images/bicolpo-logo-transparent.png')}}" width="13%" height=auto; alt="alt_text" border="0" style="display:flex;">
                              <p class="logop" style="text-align :center;  margin-left:400px;"> <strong> Bicolpo Travels<br>
                                   <i style="font-family:initial;"> A Different Feel</i></strong></p>
                            </td>
                        </tr>
                    </table>


                    <!-- Email Header : BEGIN -->
                    <table align="center" width="600" class="email-container">
                        <tr>
                            <td style="padding: 0px; text-align: center;">
                                <img src="{{asset($emaild->imaged)}}" width="100%" alt="alt_text" border="0">

                            </td>
                        </tr>
                    </table>
                    <!-- Email Header : END -->

                    <!-- Email Body : BEGIN -->
                    <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="600" class="email-container">


                        <!-- 1 Column Text : BEGIN -->
                        <tr>
                            <td style="padding: 30px; text-align: left; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
                                 <h1 style="padding: 0px; text-align: left; color:black; background-color:white;"> {{$data['headline']}}
                                 </h1><br>
                                Dear {{$user->name}},<br><br>


                                {{$data['message1']}}
                                <br><br>
                                {{$data['message2']}}
                                <br><br>
                                Thank you for your time.<br><br>

                                Bicolpo Travels<br><br><br>

                                <!-- Button : Begin -->

                                <table cellspacing="0" cellpadding="0" border="0" align="center" style="margin-top: 20px;">
                                    <tr>
                                        <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td">
                                            <a href="http://bicolpotravels.com"
                                                 style="background: #0089b2; border: 15px solid #0089b2; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;"
                                                 class="button-a">
                                                <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->Visit Our Site
                                                <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->
                                            </a>
                                        </td>
                                    </tr>
                                </table>

                                <!-- Button : END -->
                            </td>
                        </tr>
                        <!-- 1 Column Text : BEGIN -->



                        <!-- Three Even Columns : BEGIN -->
                        <tr>
                            <td align="center" valign="top" style="padding: 10px;">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td width="33.33%" class="stack-column-center">
                                            <table cellspacing="0" cellpadding="0" border="0">
                                                <tr>
                                                    <td style="padding: 10px; text-align: center"><img src="{{asset($emaild->imagea)}}" width="170" height="200" alt="alt_text" border="0" class="fluid"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow"> {{$emaild->titlea}} </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="33.33%" class="stack-column-center">
                                            <table cellspacing="0" cellpadding="0" border="0">
                                                <tr>
                                                    <td style="padding: 10px; text-align: center"><img src="{{asset($emaild->imageb)}}" width="170" height="200" alt="alt_text" border="0" class="fluid"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow"> {{$emaild->titleb}}  </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="33.33%" class="stack-column-center">
                                            <table cellspacing="0" cellpadding="0" border="0">
                                                <tr>
                                                    <td style="padding: 10px; text-align: center"><img src="{{asset($emaild->imagec)}}" width="170" height="200" alt="alt_text" border="0" class="fluid"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow"> {{$emaild->titlec}}  </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                           @endforeach
                            </td>
                        </tr>
                        <!-- Three Even Columns : END -->

                        <!-- Thumbnail Left, Text Right : BEGIN -->


                    </table>
                    <!-- Email Body : END -->

                    <!-- Email Footer : BEGIN -->
                    <table align="center" width="600" class="email-container" style="background-color:#032460;">
                        <tr>
                            <td style="padding: 10px 0px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #ffffff;">
                                <span class="mobile-link--footer"><strong style="font-size:13px;">Contact Us</strong><br> Hotline- 01718128917<br>
                               Email: <span style="color:#ffffff!important;"><a href="mailto:sales@bicolpotravels.com" style="color:#ffffff!important;">sales@bicolpotravels.com </a>,<a href="mailto:bcbd14@gmail.com" style="color:#ffffff!important;"> bcbd14@gmail.com </a></span></span> <br>


                            </td>
                        </tr>
                    </table>
                    <table align="center" width="600" class="email-container" style="background-color:#032460;">
                        <tr style="border-collapse:collapse;margin-top:20px;">
                            <td align="center" style="padding:10px;Margin:0;font-size:0;">
                                <table class="es-table-not-adapt es-social" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;">


                                    <tr style="border-collapse:collapse;">
                                        <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px;"><a href="https://www.facebook.com/bicolpotravels"><img title="Facebook"
                                                     src="https://hhglmi.stripocdn.email/content/assets/img/social-icons/circle-white/facebook-circle-white.png" alt="Fb" width="24" height="24"
                                                     style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"></a></td>
                                        <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px;"><a href="mailto:sales@bicolpotravels.com"><img title="Email" src="{{asset('assets/images/email-circle-icon.png')}}"
                                                 alt="Tw" width="24" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"></a></td>
                                        <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px;"><a href="https://join.skype.com/invite/P6q9ig1G7KaR"><img title="Skype" src="{{asset('assets/images/skype-circle-icon.png')}}"
                                                 alt="Inst" width="24" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"></a></td>
                                        {{-- <td valign="top" align="center" style="padding:0;Margin:0;"><img title="Linkedin" src="https://hhglmi.stripocdn.email/content/assets/img/social-icons/circle-white/linkedin-circle-white.png" alt="In" width="24"
                                                 height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"></td> --}}
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                    <table align="center" width="600" class="email-container" style="background-color:#032460;">
                        <tr>
                            <td style="padding: 10px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #ffffff;">
                                <span class="mobile-link--footer">Copyright &copy; {{date('Y')}} Bicolpo Travels. All rights reserved.<br>If you don't want this type of emails</span> <br>
                                <br>
                              <a href="http://bicolpotravels.com/admin/sendemail/delete-user/{{$user->id}}" style="color:#ffffff!important;"  ><unsubscribe style="color:#ffffff!important; text-decoration:underline; ">Unsubscribe</unsubscribe></a>
                            </td>
                        </tr>
                    </table>
                    {{-- <!-- Email Footer : END bicolpotravels.com/admin/sendemail/delete-user/{{$user->id}}--> --}}

                </center>
            </td>
        </tr>
    </table>
</body>

</html>
