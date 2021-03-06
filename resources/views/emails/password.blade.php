@extends('emails.template')

@section('content')

    <repeater>
        <layout label="Reset your password">
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td bgcolor="#85bdad" nowrap><img border="0" src="{{! \URL::asset('images/spacer.gif') }}" width="5" height="1"></td>
                    <td width="100%" bgcolor="#ffffff">

                        <table width="100%" cellpadding="20" cellspacing="0" border="0">
                            <tr>
                                <td bgcolor="#ffffff" class="contentblock">

                                    <h4 class="secondary"><strong><singleline label="Title">Password Reset</singleline></strong></h4>
                                    <multiline label="Description"><p>Click here to reset your password: <a href="{{ url('password/reset/'.$token) }}">{{ url('password/reset/'.$token) }}</a></p></multiline>

                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            <img border="0" src="{{! \URL::asset('images/spacer.gif') }}" width="1" height="15" class="divider"><br>
        </layout>
    </repeater>

@endsection