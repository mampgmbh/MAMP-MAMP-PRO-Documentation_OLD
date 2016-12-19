---
title: MAMP (Mac) Documentation
description: Search
layout: default-2
language: en
---

## Search

<form action="/en/Search/">
  <input type="text" name="q" id="tipue_search_input" autocomplete="off" required>
</form>
<div id="tipue_search_content"></div>

<script>
var tipuesearch = {"pages": [
  {% for page in site.pages %}
    {% if page.url contains "/en/" %}
      {% if page.url contains "/en/search/" %}
          
        {% else %}
          {"title": "{{page.title}}", "text": "{{page.content | strip_html | strip_newlines | xml_escape}}", "tags": "", "url": "{{page.url}}"},
      {% endif %}
    {% endif %}
  {% endfor %}
  {"title": "", "text": "", "tags": "", "url": ""}
]};

$(document).ready(function() {
  $('#tipue_search_input').tipuesearch({
    'mode': 'static',
    'show': 100
  });
});
</script>
