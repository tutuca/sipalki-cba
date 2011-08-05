# -*- coding: utf-8 -*-
from django.conf.urls.defaults import patterns, include, url
from django.conf import settings

urlpatterns = patterns('sipalki.views',
    # Examples:
    url(r'^$', 'index', name='index'),
)
urlpatterns += patterns('',
    (r'^static/(.*)$', 'django.views.static.serve', {'document_root': settings.STATIC_ROOT}),
)
