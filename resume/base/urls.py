from django.contrib import admin
from django.urls import path,include
from base import views

#DJANGO ADMIN HEADER CUSTOMIZATION
admin.site.site_header = "Login to Developer Rooney Mwathani"
admin.site.site_title = "Welcome to Rooney's Dashboard"
admin.site.index_title = "Welcome to this Portal"

urlpatterns = [
    path('', views.index, name='index'),
    path('about/', views.about, name='about'),
    path('projects/', views.project, name='projects'),
    path('contact/', views.contact, name='contact'),
]