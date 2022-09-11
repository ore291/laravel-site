<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center><span class="im">
          
            <br>
        </span>
        <table align="center" border="0" cellpadding="0" cellspacing="0"
            style="border-bottom:rgb(204,204,204) 1px solid;border-left:rgb(204,204,204) 1px solid;border-top:rgb(204,204,204) 1px solid;border-right:rgb(204,204,204) 1px solid"
            width="650">
            <tbody>
                <tr>
                    <td>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="650">
                            <tbody>
                                <tr>
                                    <td align="center" valign="top">
                                        <a href="{{URL::to('/')}}" target="_blank"
                                            data-saferedirecturl="{{URL::to('/')}}"><img
                                                align="middle" alt="" border="0" height="84"
                                                src="{{ asset(setting('site_logo')) }}"
                                                 width="248" class="CToWUd"
                                                data-bit="iit"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img alt="" height="10"
                                            src="{{ asset(setting('site_logo')) }}"
                                            width="1" class="CToWUd" data-bit="iit">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <table border="0" cellspacing="0" width="550">
                                            <tbody>
                                                <tr>
                                                    <td align="left" id="m_7916045545981152781bodycontent"><span
                                                            class="im">
                                                            <p>
                                                                <font face="Tahoma" size="2">Hi User,
                                                                </font>
                                                            </p>
                                                            <p>
                                                                <font face="Tahoma" size="2">A new tip has just been submitted 
                                                                    on {{setting('app_name')}} .
                                                                </font>
                                                            </p>
                                                           
                                                        </span>
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            id="m_7916045545981152781frame"
                                                            style="border-bottom:rgb(204,153,102) 1px outset;border-left:rgb(204,153,102) 1px outset;border-top:rgb(204,153,102) 1px outset;border-right:rgb(204,153,102) 1px outset"
                                                            width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <table border="1" cellpadding="0"
                                                                            cellspacing="0"
                                                                            id="m_7916045545981152781bodycontent">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th align="center"
                                                                                        style="padding-bottom:5px;background-color:rgb(255,0,0);padding-left:5px;padding-right:5px;color:rgb(255,255,255);padding-top:5px"
                                                                                        valign="top" width="12%">
                                                                                        <font face="Tahoma"
                                                                                            size="2">Kick Off
                                                                                        </font>
                                                                                    </th>
                                                                                    <th align="center"
                                                                                        style="padding-bottom:5px;background-color:rgb(255,0,0);padding-left:5px;padding-right:5px;color:rgb(255,255,255);padding-top:5px"
                                                                                        valign="top" width="25%">
                                                                                        <font face="Tahoma"
                                                                                            size="2">Event
                                                                                        </font>
                                                                                    </th>
                                                                                    <th align="center"
                                                                                        style="padding-bottom:5px;background-color:rgb(255,0,0);padding-left:5px;padding-right:5px;color:rgb(255,255,255);padding-top:5px"
                                                                                        valign="top" width="30%">
                                                                                        <font face="Tahoma"
                                                                                            size="2">Tips</font>
                                                                                    </th>
                                                                                    <th align="center"
                                                                                        style="padding-bottom:5px;background-color:rgb(255,0,0);padding-left:5px;padding-right:5px;color:rgb(255,255,255);padding-top:5px"
                                                                                        valign="top" width="15%">
                                                                                        <font face="Tahoma"
                                                                                            size="2">Odds</font>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="middle"
                                                                                        style="padding-bottom:5px;background-color:rgb(255,187,187);padding-left:5px;padding-right:5px;color:rgb(0,0,0);padding-top:5px"
                                                                                        valign="center">
                                                                                        <p>
                                                                                            <font face="Tahoma"
                                                                                                size="2">
                                                                                                {{$event->date_t}} {{$event->time_t}} 
                                                                                            </font>
                                                                                        </p>
                                                                                    </td>
                                                                                    <td align="middle"
                                                                                        style="padding-bottom:5px;background-color:rgb(255,187,187);padding-left:5px;padding-right:5px;color:rgb(0,0,0);padding-top:5px"
                                                                                        valign="center">
                                                                                        <font face="Tahoma"
                                                                                            size="2"><p>{{$event->team_a}} vs {{$event->team_b}}</p></font>
                                                                                    </td>
                                                                                    <td align="middle"
                                                                                        style="padding-bottom:5px;background-color:rgb(255,187,187);padding-left:5px;padding-right:5px;color:rgb(0,0,0);padding-top:5px"
                                                                                        valign="center">
                                                                                        <p>
                                                                                            <font face="Tahoma"
                                                                                                size="2"><p>
                                                                                                    {{$event->tips}}
                                                                                                </p>
                                                                                            </font>
                                                                                        </p>
                                                                                    </td>
                                                                                    <td align="middle"
                                                                                        style="padding-bottom:5px;background-color:rgb(255,187,187);padding-left:5px;padding-right:5px;color:rgb(0,0,0);padding-top:5px"
                                                                                        valign="center">
                                                                                        <strong>
                                                                                            <font face="Tahoma"
                                                                                                size="2"><p>
                                                                                                    {{$event->odds}}
                                                                                                </p></font>
                                                                                        </strong>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table><span class="im">
                                                                            <center>
                                                                                <font face="Tahoma" size="3">
                                                                                    <strong><a
                                                                                            href="{{URL::to('/')}}"
                                                                                            target="_blank"
                                                                                            data-saferedirecturl="{{URL::to('/')}}">Click
                                                                                            Here to View more Soccer
                                                                                            Prediction</a></strong>
                                                                                </font>
                                                                            </center>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                       
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            width="550">
                                            <tbody>
                                                <tr>
                                                    <td valign="bottom">
                                                        &nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <div class="adm">
                                <div id="q_410" class="ajR h4">
                                    <div class="ajT"></div>
                                </div>
                            </div>
                           
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
</body>

</html>
