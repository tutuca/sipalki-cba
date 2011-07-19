# -*- coding: utf-8 -*-
from django.conf.urls.defaults import patterns, include, url
from django.contrib import admin
admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    url(r'^$', 'siplaki.views.index', name='index'),
    # url(r'^siplaki/', include('siplaki.foo.urls')),


     url(r'^admin/', include(admin.site.urls)),
)
