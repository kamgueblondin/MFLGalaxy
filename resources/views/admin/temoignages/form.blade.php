
<div class="form-group row {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Image</label>
    <div class="col-md-10">
        <input class="form-control" name="image" type="file" id="image">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" type="text" id="name" value="{{ old('name', optional($temoignages)->name) }}" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('content_english') ? 'has-error' : '' }}">
    <label for="content_english" class="col-md-2 control-label">Content English</label>
    <div class="col-md-10">
        <textarea class="form-control" name="content_english" cols="50" rows="10" id="content_english" placeholder="Enter content english here...">{{ old('content_english', optional($temoignages)->content_english) }}</textarea>
        {!! $errors->first('content_english', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('content_frensh') ? 'has-error' : '' }}">
    <label for="content_frensh" class="col-md-2 control-label">Content Frensh</label>
    <div class="col-md-10">
        <textarea class="form-control" name="content_frensh" cols="50" rows="10" id="content_frensh" placeholder="Enter content frensh here...">{{ old('content_frensh', optional($temoignages)->content_frensh) }}</textarea>
        {!! $errors->first('content_frensh', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('content_spanish') ? 'has-error' : '' }}">
    <label for="content_spanish" class="col-md-2 control-label">Content Spanish</label>
    <div class="col-md-10">
        <textarea class="form-control" name="content_spanish" cols="50" rows="10" id="content_spanish" placeholder="Enter content spanish here...">{{ old('content_spanish', optional($temoignages)->content_spanish) }}</textarea>
        {!! $errors->first('content_spanish', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('content_deush') ? 'has-error' : '' }}">
    <label for="content_deush" class="col-md-2 control-label">Content Deush</label>
    <div class="col-md-10">
        <textarea class="form-control" name="content_deush" cols="50" rows="10" id="content_deush" placeholder="Enter content deush here...">{{ old('content_deush', optional($temoignages)->content_deush) }}</textarea>
        {!! $errors->first('content_deush', '<p class="help-block">:message</p>') !!}
    </div>
</div>

