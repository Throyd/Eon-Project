<h2>Eon Project</h2>
<ul>
  {% for blogpost in site.blogposts %}
    <li>
      <h2>{{ blogpost.title }}</h2>
    </li>
  {% endfor %}
</ul>
