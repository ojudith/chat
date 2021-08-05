@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row chat-row">
        <div class="col-md-3">
            <div class="users">
                <h5>Users</h5>
                <ul class="list-group list-chat-item">
                    @if ($users->count())
                     @foreach ($users as $user)
                    <li class="chat-user-list" @if ($user->id == $friendInfo->id)
                        active
                    @endif>
                        <a href="{{route('message.conversation', $user->id)}}">
                            <div class="chat-img">
                                    {!! makeImageFromName($user->name) !!}    
                                    <i class="fa fa-circle  user-status-icon" title="away"></i>                  
                            </div>
                            <div class="chat-name font-weight-bold">
                                {{$user->name}}
                            </div>
                        </a>
                    </li>                                            
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-md-9 chat-room">
            <div class="chat-header">
                    <div class="chat-img">
                            {!! makeImageFromName($user->name) !!}                    
                    </div>
                    <div class="chat-name font-weight-bold">
                        {{$user->name}}
                        <i class="fa fa-circle  user-status-top" title="away" id="userStatusTop{{$friendInfo->id}}"></i>  
                    </div>
            </div>
            <div class="chat-body" id="chatBody">
                <div class="message-listing" id="messageWrapper">
                    <div class="row message align-content-center mb-2">
                        <div class="col-md-12 user-info">
                            <div class="chat-img">
                                    {!! makeImageFromName($user->name) !!}    
                            </div>
                            <div class="chat-name font-weight-bold">
                                Bekky
                                <span class="small time text-gray-500" title="2020-05-2 10:10am"> 10:00 am</span>
                            </div>
                        </div>
                        <div class="col-md-12 message-content">
                            <div class="message-text">
                                Message here
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-box">
                <div class="chat-input bg-white" id="chatInput" contenteditable=""></div>
                <div class="chat-input-toolbar">
                    <button title="Add File" class="btn btn-light btn bt-sm btn-file-upload">
                        <i class="fa fa-paperclip"></i>
                    </button>
                    button
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
