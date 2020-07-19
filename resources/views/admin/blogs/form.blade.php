
<div class="form-group row {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Image</label>
    <div class="col-md-10">
        <input class="form-control" name="image" type="file" id="image" placeholder="Enter image here...">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('title_english') ? 'has-error' : '' }}">
    <label for="title_english" class="col-md-2 control-label">Title English</label>
    <div class="col-md-10">
        <input class="form-control" name="title_english" type="text" id="title_english" value="{{ old('title_english', optional($blogs)->title_english) }}" maxlength="255" placeholder="Enter title english here...">
        {!! $errors->first('title_english', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('title_frensh') ? 'has-error' : '' }}">
    <label for="title_frensh" class="col-md-2 control-label">Title Frensh</label>
    <div class="col-md-10">
        <input class="form-control" name="title_frensh" type="text" id="title_frensh" value="{{ old('title_frensh', optional($blogs)->title_frensh) }}" maxlength="255" placeholder="Enter title frensh here...">
        {!! $errors->first('title_frensh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('title_spanish') ? 'has-error' : '' }}">
    <label for="title_spanish" class="col-md-2 control-label">Title Spanish</label>
    <div class="col-md-10">
        <input class="form-control" name="title_spanish" type="text" id="title_spanish" value="{{ old('title_spanish', optional($blogs)->title_spanish) }}" maxlength="255" placeholder="Enter title spanish here...">
        {!! $errors->first('title_spanish', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('title_deush') ? 'has-error' : '' }}">
    <label for="title_deush" class="col-md-2 control-label">Title Deush</label>
    <div class="col-md-10">
        <input class="form-control" name="title_deush" type="text" id="title_deush" value="{{ old('title_deush', optional($blogs)->title_deush) }}" maxlength="255" placeholder="Enter title deush here...">
        {!! $errors->first('title_deush', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('content_english') ? 'has-error' : '' }}">
    <label for="content_english" class="col-md-2 control-label">Content English</label>
    <div class="col-md-10">
        <textarea class="form-control" name="content_english" cols="50" rows="10" id="content_english" placeholder="Enter content english here...">{{ old('content_english', optional($blogs)->content_english) }}</textarea>
        {!! $errors->first('content_english', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('content_frensh') ? 'has-error' : '' }}">
    <label for="content_frensh" class="col-md-2 control-label">Content Frensh</label>
    <div class="col-md-10">
        <textarea class="form-control" name="content_frensh" cols="50" rows="10" id="content_frensh" placeholder="Enter content frensh here...">{{ old('content_frensh', optional($blogs)->content_frensh) }}</textarea>
        {!! $errors->first('content_frensh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('content_spanish') ? 'has-error' : '' }}">
    <label for="content_spanish" class="col-md-2 control-label">Content Spanish</label>
    <div class="col-md-10">
        <textarea class="form-control" name="content_spanish" cols="50" rows="10" id="content_spanish" placeholder="Enter content spanish here...">{{ old('content_spanish', optional($blogs)->content_spanish) }}</textarea>
        {!! $errors->first('content_spanish', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('content_deush') ? 'has-error' : '' }}">
    <label for="content_deush" class="col-md-2 control-label">Content Deush</label>
    <div class="col-md-10">
        <textarea class="form-control" name="content_deush" cols="50" rows="10" id="content_deush" placeholder="Enter content deush here...">{{ old('content_deush', optional($blogs)->content_deush) }}</textarea>
        {!! $errors->first('content_deush', '<p class="help-block">:message</p>') !!}
    </div>
</div>
