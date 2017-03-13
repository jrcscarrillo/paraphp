{% extends "layouts/adicional.volt" %}
{% block forma %}
    {{ content() }}
    <div class="body bg-blue">
    {% endblock %}
    {% block cabecera %}
        {{ form('developers/save', 'id': 'developersForm', 'class': 'sky-form') }}
    {% endblock %}
    {% block cuerpoforma %}
        <fieldset>
            <section>
                <div class="row">
                    <div class="col col-8">
                        <label class="hidden">
                            <i class="icon-append fa fa-user"></i>
                            {{ form.render('id') }}
                        </label>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <label class="label col col-4">Full Name</label>
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            {{ form.render('fullname', ['class': 'form-control']) }}
                        </label>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <label class="label col col-4">Email</label>
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            {{ form.render('email', ['class': 'form-control',  'type': 'email']) }}
                        </label>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <label class="label col col-4">Address</label>
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            {{ form.render('address', ['class': 'form-control']) }}
                        </label>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <label class="label col col-4">Telephone</label>
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            {{ form.render('telephone', ['class': 'form-control', 'placeholder' : '(xxx) xxx-xxxx']) }}
                        </label>
                    </div>
                </div>
            </section>

        </fieldset>
        <footer>
            {{ submit_button('Submit', 'class': 'btn btn-primary') }}
            <p class="help-block">By signing up, you accept terms of use and privacy policy.</p>
        </footer>
    </form>
</div>
{% endblock %}