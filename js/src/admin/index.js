import app from 'flarum/admin/app';

app.initializers.add('asile-ninja', function () {
  app.extensionData
    .for('asile-ninja')
    .registerPermission(
      {
        permission: 'seeNinjaBlocks',
        label: app.translator.trans('asile-ninja.admin.permissions.see_ninja_quotes'),
        icon: 'fas fa-at',
      },
      'start'
    );
});
