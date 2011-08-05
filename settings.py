# -*- coding: utf-8 -*-

import os

BASE_DIR = os.path.dirname(__file__)
DEBUG = True
TEMPLATE_DEBUG = DEBUG

ADMINS = (
     ('Matías Iturburu', 'maturburu@gmail.com'),
     ('Ana Comes', 'anacomes@gmail.com'),
)

MANAGERS = ADMINS

DATABASES = {
    'default': {
        'ENGINE': '', 
        'NAME': '',
        'USER': '',                      
        'PASSWORD': '',                  
        'HOST': '',                      
        'PORT': '',                      
    }
}
TIME_ZONE = 'America/Argentina/Cordoba'
LANGUAGE_CODE = 'es-AR'
SITE_ID = 1
MEDIA_ROOT = os.path.join(BASE_DIR, 'media')
MEDIA_URL = '/media/'
STATIC_ROOT = os.path.join(BASE_DIR, 'static')
STATIC_URL = '/static/'
STATICFILES_DIRS = (
)
ROOT_URLCONF = 'sipalki.urls'

TEMPLATE_DIRS = (
    'templates',
    os.path.join(BASE_DIR, 'templates')
)
