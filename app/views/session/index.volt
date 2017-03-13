{{ content() }}

<div class="container">
<div class="row">

    <div class="col-md-6">
        {{ form('session/start', 'role': 'form', 'class': 'sky-form') }}
        <header>Log in</header>
        <fieldset>
            <section>
                <div class="row">
                    <label class="label col col-4">E-mail</label>
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            {{ text_field('email', 'type': "email") }}
                        </label>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <label class="label col col-4">Password</label>
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-lock"></i>
                            {{ password_field('password', 'type': "password") }}
                        </label>
                    </div>
                </div>
            </section>
        </fieldset>
        <footer>
            {{ submit_button('Login', 'class': 'btn btn-primary btn-large') }}
            {{ link_to('register', ' Sign Up ', 'class': 'btn btn-primary btn-large') }}
        </footer>
        </form>
    </div>

    <div class="col-md-6">

        <div class="page-header">
            <h2>Don't you have an account yet?</h2>
        </div>

        <p>Create an account offers the following advantages:</p>
        <ul>
            <li>Create, track and export your snippets online</li>
            <li>Gain critical insights into how php is doing</li>
            <li>Stay informed about updates and special packages</li>
        </ul>

    </div>
</div>
</div>
