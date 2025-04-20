@extends('layouts.app')
@section('content')
   
    <form action="{{route('settings.request')}}" method="POST">
        @csrf
        @include('widget.success')
        <h1 class="mt-4 mb-4 alert alert-secondary ">Header Settings</h1>
        <div class="mb-3">
            <label class="form-label">Header Whatsapp number</label>
            <input type="text" class="form-control" name="header_whatsapp" required value="{{ isset($data['header_whatsapp']) ? $data['header_whatsapp'] : '' }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Book Appointment link</label>
            <input type="text" class="form-control" name="book_appointment_link" required value="{{ isset($data['book_appointment_link']) ? $data['book_appointment_link'] : '' }}">
        </div>
        
        <h1 class="mt-4 mb-4 alert alert-secondary ">Footer Settings</h1>
        <div class="mb-3">
            <label class="form-label">Contact Us </label>
            <textarea type="text" class="form-control" name="contact_us_info" required >{{ isset($data['contact_us_info']) ? $data['contact_us_info'] : '' }}</textarea>
        </div> 
        <div class="mb-3">
            <label class="form-label">App links headline</label>
            <input type="text" class="form-control" name="app_links_tilte" required value="{{ isset($data['app_links_tilte']) ? $data['app_links_tilte'] : '' }}">
        </div>
        <div class="mb-3">
            <label class="form-label">App Playstore link</label>
            <input type="text" class="form-control" name="app_playstore_link" required value="{{ isset($data['app_playstore_link']) ? $data['app_playstore_link'] : '' }}">
        </div>
        <div class="mb-3">
            <label class="form-label">App appstore link</label>
            <input type="text" class="form-control" name="app_appstore_link" required value="{{ isset($data['app_appstore_link']) ? $data['app_appstore_link'] : '' }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Social links</label>
            <input type="text" class="form-control" name="facebook_link" value="{{ isset($data['facebook_link']) ? $data['facebook_link'] : '' }}" placeholder="Facebook">
            <input type="text" class="form-control" name="twitter_link" value="{{ isset($data['twitter_link']) ? $data['twitter_link'] : '' }}" placeholder="Twitter">
            <input type="text" class="form-control" name="instagram_link" value="{{ isset($data['instagram_link']) ? $data['instagram_link'] : '' }}" placeholder="Instagram">
            <input type="text" class="form-control" name="linkedin_link" value="{{ isset($data['linkedin_link']) ? $data['linkedin_link'] : '' }}" placeholder="Linkedin">
            <input type="text" class="form-control" name="youtube_link" value="{{ isset($data['youtube_link']) ? $data['youtube_link'] : '' }}" placeholder="Youtube">
            <input type="text" class="form-control" name="whatsapp_link" value="{{ isset($data['whatsapp_link']) ? $data['whatsapp_link'] : '' }}" placeholder="Whatsapp">
        </div>
        @include('widget.errors')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection