from django.contrib import admin
from gestor_db.models import Users
# Register your models here.

class UsersAdminName(admin.ModelAdmin):
    list_display = ('name', 'email', 'email_verified_at')

admin.site.register(Users, UsersAdminName)