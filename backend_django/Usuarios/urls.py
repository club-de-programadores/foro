from django.urls import path
from .views import index, user_modific
urlpatterns = [
    path('index/', index),
    path('user/', user_modific)
]
