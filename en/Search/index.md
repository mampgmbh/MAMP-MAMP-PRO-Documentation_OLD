---
title: MAMP & MAMP PRO Documentation > Search
description: MAMP & MAMP PRO Documentation Search
layout: default-2
language: en
---

## Search

<form action="/en/Search/" method="get">
  <p><input type="text" name="q" id="tipue_search_input" autocomplete="off" required> <input type="submit" value="Search"></p>
</form>
<div id="tipue_search_content"></div>

<script>
var tipuesearch = {"pages": [
  {% for page in site.pages %}
    {% if page.url contains "/en/" %}
      {% if page.url contains "/en/Search/" %}
          
        {% else %}
          {"title": "{{page.title}}", "text": "", "tags": "", "url": "{{page.url}}"},
      {% endif %}
    {% endif %}
  {% endfor %}
  {"title": "", "text": "", "tags": "", "url": ""}
]};

var tipuesearch_string_5 = 'Results';

$(document).ready(function() {
  $('#tipue_search_input').tipuesearch({
    'mode': 'static',
    'show': 100,
    'showTitleCount': false
  });
});
</script>
