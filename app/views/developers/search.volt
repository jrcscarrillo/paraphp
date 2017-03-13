{{ content() }}

<ul class="pager">
    <li class="previous pull-left">
        {{ link_to("developers/index", "&larr; Go Back") }}
    </li>
    <li class="pull-right">
        {{ link_to("developers/new", "Add a developer to our database") }}
    </li>
</ul>

{% for miscodigos in page.items %}
{% if loop.first %}
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Developer</th>
            <th>Date Enroll</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
    </thead>
{% endif %}
    <tbody>
        <tr>
            <td>{{ miscodigos.id }} - {{ miscodigos.fullname }} </td>
            <td>{{ miscodigos.dateEnrolled }}</td>
            <td>{{ miscodigos.email }}</td>
            <td>{{ miscodigos.address }}</td>
            <td>{{ miscodigos.telephone }}</td>
            <td width="2%">{{ link_to("developers/edit/" ~ miscodigos.id, '<i class="glyphicon glyphicon-edit"></i>', "class": "btn btn-default") }}</td>
            <td width="2%">{{ link_to("developers/delete/" ~ miscodigos.id, '<i class="glyphicon glyphicon-remove"></i>', "class": "btn btn-default") }}</td>
        </tr>
    </tbody>
{% if loop.last %}
    <tbody>
        <tr>
            <td colspan="7" align="right">
                <div class="btn-group">
                    {{ link_to("developers/search", '<i class="icon-fast-backward"></i> First', "class": "btn btn-default") }}
                    {{ link_to("developers/search?page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn btn-default") }}
                    {{ link_to("developers/search?page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn btn-default") }}
                    {{ link_to("developers/search?page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn btn-default") }}
                    <span class="help-inline">{{ page.current }}/{{ page.total_pages }}</span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
{% endif %}
{% else %}
    No developers were found in our database
{% endfor %}
