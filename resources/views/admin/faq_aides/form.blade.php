<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($faqAides)->name) }}" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($faqAides)->email) }}" maxlength="255" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('message_en') ? 'has-error' : '' }}">
    <label for="message_en" class="col-md-2 control-label">Message En</label>
    <div class="col-md-10">
        <textarea class="form-control" name="message_en" cols="50" rows="10" id="message_en" required="true" placeholder="Enter message en here...">{{ old('message_en', optional($faqAides)->message_en) }}</textarea>
        {!! $errors->first('message_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('message_fr') ? 'has-error' : '' }}">
    <label for="message_fr" class="col-md-2 control-label">Message Fr</label>
    <div class="col-md-10">
        <textarea class="form-control" name="message_fr" cols="50" rows="10" id="message_fr" required="true" placeholder="Enter message fr here...">{{ old('message_fr', optional($faqAides)->message_fr) }}</textarea>
        {!! $errors->first('message_fr', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('message_es') ? 'has-error' : '' }}">
    <label for="message_es" class="col-md-2 control-label">Message Es</label>
    <div class="col-md-10">
        <textarea class="form-control" name="message_es" cols="50" rows="10" id="message_es" required="true" placeholder="Enter message es here...">{{ old('message_es', optional($faqAides)->message_es) }}</textarea>
        {!! $errors->first('message_es', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('message_de') ? 'has-error' : '' }}">
    <label for="message_de" class="col-md-2 control-label">Message De</label>
    <div class="col-md-10">
        <textarea class="form-control" name="message_de" cols="50" rows="10" id="message_de" required="true" placeholder="Enter message de here...">{{ old('message_de', optional($faqAides)->message_de) }}</textarea>
        {!! $errors->first('message_de', '<p class="help-block">:message</p>') !!}
    </div>
</div>
