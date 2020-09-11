<!-- load main layout -->
<?= $this->extend('auth/layouts/default') ?>

<!-- load main content -->
<?= $this->section('main') ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3">
        <h1 class="h2">Settings</h1>
    </div>

    <div class="card p-3 my-3">
        <form action="<?= site_url('settings-update-system'); ?>" method="POST" accept-charset="UTF-8" onsubmit="saveSystem.disabled = true; return true;">
          <?= csrf_field() ?>

          <div class="col-md-6">
            <h6 class="pb-2 mb-0 mt-4">System</h6>
            <p class="text-muted">Application settings, language, time zones and other environments.</p>
            <div class="form-group">
                <label for="language" class="form-control-label">Default Language</label>
                <select class="form-control" name="language">
                    <option value="en" <?php if ($system['language'] == 'en') : ?> selected <?php endif ?> >English</option>
                    <option value="es" <?php if ($system['language'] == 'es') : ?> selected <?php endif ?> >Spanish</option>
                    <option value="fr" <?php if ($system['language'] == 'fr') : ?> selected <?php endif ?> >French</option>
                </select>
            </div>
            <div class="form-group">
                <label for="timezone" class="form-control-label">Time zone</label>
                <select class="form-control" name="timezone">
                    <option value="Pacific/Midway" <?php if ($system['timezone'] == 'Pacific/Midway') : ?> selected <?php endif ?> >(UTC -11:00) Pacific/Midway</option>
                    <option value="Pacific/Niue" <?php if ($system['timezone'] == 'Pacific/Niue') : ?> selected <?php endif ?> >(UTC -11:00) Pacific/Niue</option>
                    <option value="Pacific/Pago_Pago" <?php if ($system['timezone'] == 'Pacific/Pago_Pago') : ?> selected <?php endif ?> >(UTC -11:00) Pacific/Pago_Pago</option>
                    <option value="America/Adak" <?php if ($system['timezone'] == 'America/Adak') : ?> selected <?php endif ?> >(UTC -10:00) America/Adak</option>
                    <option value="Pacific/Honolulu" <?php if ($system['timezone'] == 'Pacific/Honolulu') : ?> selected <?php endif ?> >(UTC -10:00) Pacific/Honolulu</option>
                    <option value="Pacific/Rarotonga" <?php if ($system['timezone'] == 'Pacific/Rarotonga') : ?> selected <?php endif ?> >(UTC -10:00) Pacific/Rarotonga</option>
                    <option value="Pacific/Tahiti" <?php if ($system['timezone'] == 'Pacific/Tahiti') : ?> selected <?php endif ?> >(UTC -10:00) Pacific/Tahiti</option>
                    <option value="Pacific/Marquesas" <?php if ($system['timezone'] == 'Pacific/Marquesas') : ?> selected <?php endif ?> >(UTC -09:30) Pacific/Marquesas</option>
                    <option value="America/Anchorage" <?php if ($system['timezone'] == 'America/Anchorage') : ?> selected <?php endif ?> >(UTC -09:00) America/Anchorage</option>
                    <option value="America/Juneau" <?php if ($system['timezone'] == 'America/Juneau') : ?> selected <?php endif ?> >(UTC -09:00) America/Juneau</option>
                    <option value="America/Metlakatla" <?php if ($system['timezone'] == 'America/Metlakatla') : ?> selected <?php endif ?> >(UTC -09:00) America/Metlakatla</option>
                    <option value="America/Nome" <?php if ($system['timezone'] == 'America/Nome') : ?> selected <?php endif ?> >(UTC -09:00) America/Nome</option>
                    <option value="America/Sitka" <?php if ($system['timezone'] == 'America/Sitka') : ?> selected <?php endif ?> >(UTC -09:00) America/Sitka</option>
                    <option value="America/Yakutat" <?php if ($system['timezone'] == 'America/Yakutat') : ?> selected <?php endif ?> >(UTC -09:00) America/Yakutat</option>
                    <option value="Pacific/Gambier" <?php if ($system['timezone'] == 'Pacific/Gambier') : ?> selected <?php endif ?> >(UTC -09:00) Pacific/Gambier</option>
                    <option value="America/Dawson" <?php if ($system['timezone'] == 'America/Dawson') : ?> selected <?php endif ?> >(UTC -08:00) America/Dawson</option>
                    <option value="America/Los_Angeles" <?php if ($system['timezone'] == 'America/Los_Angeles') : ?> selected <?php endif ?> >(UTC -08:00) America/Los_Angeles</option>
                    <option value="America/Tijuana" <?php if ($system['timezone'] == 'America/Tijuana') : ?> selected <?php endif ?> >(UTC -08:00) America/Tijuana</option>
                    <option value="America/Vancouver" <?php if ($system['timezone'] == 'America/Vancouver') : ?> selected <?php endif ?> >(UTC -08:00) America/Vancouver</option>
                    <option value="America/Whitehorse" <?php if ($system['timezone'] == 'America/Whitehorse') : ?> selected <?php endif ?> >(UTC -08:00) America/Whitehorse</option>
                    <option value="Pacific/Pitcairn" <?php if ($system['timezone'] == 'Pacific/Pitcairn') : ?> selected <?php endif ?> >(UTC -08:00) Pacific/Pitcairn</option>
                    <option value="America/Boise" <?php if ($system['timezone'] == 'America/Boise') : ?> selected <?php endif ?> >(UTC -07:00) America/Boise</option>
                    <option value="America/Cambridge_Bay" <?php if ($system['timezone'] == 'America/Cambridge_Bay') : ?> selected <?php endif ?> >(UTC -07:00) America/Cambridge_Bay</option>
                    <option value="America/Chihuahua" <?php if ($system['timezone'] == 'America/Chihuahua') : ?> selected <?php endif ?> >(UTC -07:00) America/Chihuahua</option>
                    <option value="America/Creston" <?php if ($system['timezone'] == 'America/Creston') : ?> selected <?php endif ?> >(UTC -07:00) America/Creston</option>
                    <option value="America/Dawson_Creek" <?php if ($system['timezone'] == 'America/Dawson_Creek') : ?> selected <?php endif ?> >(UTC -07:00) America/Dawson_Creek</option>
                    <option value="America/Denver" <?php if ($system['timezone'] == 'America/Denver') : ?> selected <?php endif ?> >(UTC -07:00) America/Denver</option>
                    <option value="America/Edmonton" <?php if ($system['timezone'] == 'America/Edmonton') : ?> selected <?php endif ?> >(UTC -07:00) America/Edmonton</option>
                    <option value="America/Fort_Nelson" <?php if ($system['timezone'] == 'America/Fort_Nelson') : ?> selected <?php endif ?> >(UTC -07:00) America/Fort_Nelson</option>
                    <option value="America/Hermosillo" <?php if ($system['timezone'] == 'America/Hermosillo') : ?> selected <?php endif ?> >(UTC -07:00) America/Hermosillo</option>
                    <option value="America/Inuvik" <?php if ($system['timezone'] == 'America/Inuvik') : ?> selected <?php endif ?> >(UTC -07:00) America/Inuvik</option>
                    <option value="America/Mazatlan" <?php if ($system['timezone'] == 'America/Mazatlan') : ?> selected <?php endif ?> >(UTC -07:00) America/Mazatlan</option>
                    <option value="America/Ojinaga" <?php if ($system['timezone'] == 'America/Ojinaga') : ?> selected <?php endif ?> >(UTC -07:00) America/Ojinaga</option>
                    <option value="America/Phoenix" <?php if ($system['timezone'] == 'America/Phoenix') : ?> selected <?php endif ?> >(UTC -07:00) America/Phoenix</option>
                    <option value="America/Yellowknife" <?php if ($system['timezone'] == 'America/Yellowknife') : ?> selected <?php endif ?> >(UTC -07:00) America/Yellowknife</option>
                    <option value="America/Bahia_Banderas" <?php if ($system['timezone'] == 'America/Bahia_Banderas') : ?> selected <?php endif ?> >(UTC -06:00) America/Bahia_Banderas</option>
                    <option value="America/Belize" <?php if ($system['timezone'] == 'America/Belize') : ?> selected <?php endif ?> >(UTC -06:00) America/Belize</option>
                    <option value="America/Chicago" <?php if ($system['timezone'] == 'America/Chicago') : ?> selected <?php endif ?> >(UTC -06:00) America/Chicago</option>
                    <option value="America/Costa_Rica" <?php if ($system['timezone'] == 'America/Costa_Rica') : ?> selected <?php endif ?> >(UTC -06:00) America/Costa_Rica</option>
                    <option value="America/El_Salvador" <?php if ($system['timezone'] == 'America/El_Salvador') : ?> selected <?php endif ?> >(UTC -06:00) America/El_Salvador</option>
                    <option value="America/Guatemala" <?php if ($system['timezone'] == 'America/Guatemala') : ?> selected <?php endif ?> >(UTC -06:00) America/Guatemala</option>
                    <option value="America/Indiana/Knox" <?php if ($system['timezone'] == 'America/Indiana') : ?> selected <?php endif ?> >(UTC -06:00) America/Indiana/Knox</option>
                    <option value="America/Indiana/Tell_City" <?php if ($system['timezone'] == 'America/Indiana') : ?> selected <?php endif ?> >(UTC -06:00) America/Indiana/Tell_City</option>
                    <option value="America/Managua" <?php if ($system['timezone'] == 'America/Managua') : ?> selected <?php endif ?> >(UTC -06:00) America/Managua</option>
                    <option value="America/Matamoros" <?php if ($system['timezone'] == 'America/Matamoros') : ?> selected <?php endif ?> >(UTC -06:00) America/Matamoros</option>
                    <option value="America/Menominee" <?php if ($system['timezone'] == 'America/Menominee') : ?> selected <?php endif ?> >(UTC -06:00) America/Menominee</option>
                    <option value="America/Merida" <?php if ($system['timezone'] == 'America/Merida') : ?> selected <?php endif ?> >(UTC -06:00) America/Merida</option>
                    <option value="America/Mexico_City" <?php if ($system['timezone'] == 'America/Mexico_City') : ?> selected <?php endif ?> >(UTC -06:00) America/Mexico_City</option>
                    <option value="America/Monterrey" <?php if ($system['timezone'] == 'America/Monterrey') : ?> selected <?php endif ?> >(UTC -06:00) America/Monterrey</option>
                    <option value="America/North_Dakota/Beulah" <?php if ($system['timezone'] == 'America/North_Dakota') : ?> selected <?php endif ?> >(UTC -06:00) America/North_Dakota/Beulah</option>
                    <option value="America/North_Dakota/Center" <?php if ($system['timezone'] == 'America/North_Dakota') : ?> selected <?php endif ?> >(UTC -06:00) America/North_Dakota/Center</option>
                    <option value="America/North_Dakota/New_Salem" <?php if ($system['timezone'] == 'America/North_Dakota') : ?> selected <?php endif ?> >(UTC -06:00) America/North_Dakota/New_Salem</option>
                    <option value="America/Rainy_River" <?php if ($system['timezone'] == 'America/Rainy_River') : ?> selected <?php endif ?> >(UTC -06:00) America/Rainy_River</option>
                    <option value="America/Rankin_Inlet" <?php if ($system['timezone'] == 'America/Rankin_Inlet') : ?> selected <?php endif ?> >(UTC -06:00) America/Rankin_Inlet</option>
                    <option value="America/Regina" <?php if ($system['timezone'] == 'America/Regina') : ?> selected <?php endif ?> >(UTC -06:00) America/Regina</option>
                    <option value="America/Resolute" <?php if ($system['timezone'] == 'America/Resolute') : ?> selected <?php endif ?> >(UTC -06:00) America/Resolute</option>
                    <option value="America/Swift_Current" <?php if ($system['timezone'] == 'America/Swift_Current') : ?> selected <?php endif ?> >(UTC -06:00) America/Swift_Current</option>
                    <option value="America/Tegucigalpa" <?php if ($system['timezone'] == 'America/Tegucigalpa') : ?> selected <?php endif ?> >(UTC -06:00) America/Tegucigalpa</option>
                    <option value="America/Winnipeg" <?php if ($system['timezone'] == 'America/Winnipeg') : ?> selected <?php endif ?> >(UTC -06:00) America/Winnipeg</option>
                    <option value="Pacific/Galapagos" <?php if ($system['timezone'] == 'Pacific/Galapagos') : ?> selected <?php endif ?> >(UTC -06:00) Pacific/Galapagos</option>
                    <option value="America/Atikokan" <?php if ($system['timezone'] == 'America/Atikokan') : ?> selected <?php endif ?> >(UTC -05:00) America/Atikokan</option>
                    <option value="America/Bogota" <?php if ($system['timezone'] == 'America/Bogota') : ?> selected <?php endif ?> >(UTC -05:00) America/Bogota</option>
                    <option value="America/Cancun" <?php if ($system['timezone'] == 'America/Cancun') : ?> selected <?php endif ?> >(UTC -05:00) America/Cancun</option>
                    <option value="America/Cayman" <?php if ($system['timezone'] == 'America/Cayman') : ?> selected <?php endif ?> >(UTC -05:00) America/Cayman</option>
                    <option value="America/Detroit" <?php if ($system['timezone'] == 'America/Detroit') : ?> selected <?php endif ?> >(UTC -05:00) America/Detroit</option>
                    <option value="America/Eirunepe" <?php if ($system['timezone'] == 'America/Eirunepe') : ?> selected <?php endif ?> >(UTC -05:00) America/Eirunepe</option>
                    <option value="America/Guayaquil" <?php if ($system['timezone'] == 'America/Guayaquil') : ?> selected <?php endif ?> >(UTC -05:00) America/Guayaquil</option>
                    <option value="America/Havana" <?php if ($system['timezone'] == 'America/Havana') : ?> selected <?php endif ?> >(UTC -05:00) America/Havana</option>
                    <option value="America/Indiana/Indianapolis" <?php if ($system['timezone'] == 'America/Indiana') : ?> selected <?php endif ?> >(UTC -05:00) America/Indiana/Indianapolis</option>
                    <option value="America/Indiana/Marengo" <?php if ($system['timezone'] == 'America/Indiana') : ?> selected <?php endif ?> >(UTC -05:00) America/Indiana/Marengo</option>
                    <option value="America/Indiana/Petersburg" <?php if ($system['timezone'] == 'America/Indiana') : ?> selected <?php endif ?> >(UTC -05:00) America/Indiana/Petersburg</option>
                    <option value="America/Indiana/Vevay" <?php if ($system['timezone'] == 'America/Indiana') : ?> selected <?php endif ?> >(UTC -05:00) America/Indiana/Vevay</option>
                    <option value="America/Indiana/Vincennes" <?php if ($system['timezone'] == 'America/Indiana') : ?> selected <?php endif ?> >(UTC -05:00) America/Indiana/Vincennes</option>
                    <option value="America/Indiana/Winamac" <?php if ($system['timezone'] == 'America/Indiana') : ?> selected <?php endif ?> >(UTC -05:00) America/Indiana/Winamac</option>
                    <option value="America/Iqaluit" <?php if ($system['timezone'] == 'America/Iqaluit') : ?> selected <?php endif ?> >(UTC -05:00) America/Iqaluit</option>
                    <option value="America/Jamaica" <?php if ($system['timezone'] == 'America/Jamaica') : ?> selected <?php endif ?> >(UTC -05:00) America/Jamaica</option>
                    <option value="America/Kentucky/Louisville" <?php if ($system['timezone'] == 'America/Kentucky') : ?> selected <?php endif ?> >(UTC -05:00) America/Kentucky/Louisville</option>
                    <option value="America/Kentucky/Monticello" <?php if ($system['timezone'] == 'America/Kentucky') : ?> selected <?php endif ?> >(UTC -05:00) America/Kentucky/Monticello</option>
                    <option value="America/Lima" <?php if ($system['timezone'] == 'America/Lima') : ?> selected <?php endif ?> >(UTC -05:00) America/Lima</option>
                    <option value="America/Nassau" <?php if ($system['timezone'] == 'America/Nassau') : ?> selected <?php endif ?> >(UTC -05:00) America/Nassau</option>
                    <option value="America/New_York" <?php if ($system['timezone'] == 'America/New_York') : ?> selected <?php endif ?> >(UTC -05:00) America/New_York</option>
                    <option value="America/Nipigon" <?php if ($system['timezone'] == 'America/Nipigon') : ?> selected <?php endif ?> >(UTC -05:00) America/Nipigon</option>
                    <option value="America/Panama" <?php if ($system['timezone'] == 'America/Panama') : ?> selected <?php endif ?> >(UTC -05:00) America/Panama</option>
                    <option value="America/Pangnirtung" <?php if ($system['timezone'] == 'America/Pangnirtung') : ?> selected <?php endif ?> >(UTC -05:00) America/Pangnirtung</option>
                    <option value="America/Port-au-Prince" <?php if ($system['timezone'] == 'America/Port') : ?> selected <?php endif ?> >(UTC -05:00) America/Port-au-Prince</option>
                    <option value="America/Rio_Branco" <?php if ($system['timezone'] == 'America/Rio_Branco') : ?> selected <?php endif ?> >(UTC -05:00) America/Rio_Branco</option>
                    <option value="America/Thunder_Bay" <?php if ($system['timezone'] == 'America/Thunder_Bay') : ?> selected <?php endif ?> >(UTC -05:00) America/Thunder_Bay</option>
                    <option value="America/Toronto" <?php if ($system['timezone'] == 'America/Toronto') : ?> selected <?php endif ?> >(UTC -05:00) America/Toronto</option>
                    <option value="Pacific/Easter" <?php if ($system['timezone'] == 'Pacific/Easter') : ?> selected <?php endif ?> >(UTC -05:00) Pacific/Easter</option>
                    <option value="America/Anguilla" <?php if ($system['timezone'] == 'America/Anguilla') : ?> selected <?php endif ?> >(UTC -04:00) America/Anguilla</option>
                    <option value="America/Antigua" <?php if ($system['timezone'] == 'America/Antigua') : ?> selected <?php endif ?> >(UTC -04:00) America/Antigua</option>
                    <option value="America/Aruba" <?php if ($system['timezone'] == 'America/Aruba') : ?> selected <?php endif ?> >(UTC -04:00) America/Aruba</option>
                    <option value="America/Barbados" <?php if ($system['timezone'] == 'America/Barbados') : ?> selected <?php endif ?> >(UTC -04:00) America/Barbados</option>
                    <option value="America/Blanc-Sablon" <?php if ($system['timezone'] == 'America/Blanc') : ?> selected <?php endif ?> >(UTC -04:00) America/Blanc-Sablon</option>
                    <option value="America/Boa_Vista" <?php if ($system['timezone'] == 'America/Boa_Vista') : ?> selected <?php endif ?> >(UTC -04:00) America/Boa_Vista</option>
                    <option value="America/Caracas" <?php if ($system['timezone'] == 'America/Caracas') : ?> selected <?php endif ?> >(UTC -04:00) America/Caracas</option>
                    <option value="America/Curacao" <?php if ($system['timezone'] == 'America/Curacao') : ?> selected <?php endif ?> >(UTC -04:00) America/Curacao</option>
                    <option value="America/Dominica" <?php if ($system['timezone'] == 'America/Dominica') : ?> selected <?php endif ?> >(UTC -04:00) America/Dominica</option>
                    <option value="America/Glace_Bay" <?php if ($system['timezone'] == 'America/Glace_Bay') : ?> selected <?php endif ?> >(UTC -04:00) America/Glace_Bay</option>
                    <option value="America/Goose_Bay" <?php if ($system['timezone'] == 'America/Goose_Bay') : ?> selected <?php endif ?> >(UTC -04:00) America/Goose_Bay</option>
                    <option value="America/Grand_Turk" <?php if ($system['timezone'] == 'America/Grand_Turk') : ?> selected <?php endif ?> >(UTC -04:00) America/Grand_Turk</option>
                    <option value="America/Grenada" <?php if ($system['timezone'] == 'America/Grenada') : ?> selected <?php endif ?> >(UTC -04:00) America/Grenada</option>
                    <option value="America/Guadeloupe" <?php if ($system['timezone'] == 'America/Guadeloupe') : ?> selected <?php endif ?> >(UTC -04:00) America/Guadeloupe</option>
                    <option value="America/Guyana" <?php if ($system['timezone'] == 'America/Guyana') : ?> selected <?php endif ?> >(UTC -04:00) America/Guyana</option>
                    <option value="America/Halifax" <?php if ($system['timezone'] == 'America/Halifax') : ?> selected <?php endif ?> >(UTC -04:00) America/Halifax</option>
                    <option value="America/Kralendijk" <?php if ($system['timezone'] == 'America/Kralendijk') : ?> selected <?php endif ?> >(UTC -04:00) America/Kralendijk</option>
                    <option value="America/La_Paz" <?php if ($system['timezone'] == 'America/La_Paz') : ?> selected <?php endif ?> >(UTC -04:00) America/La_Paz</option>
                    <option value="America/Lower_Princes" <?php if ($system['timezone'] == 'America/Lower_Princes') : ?> selected <?php endif ?> >(UTC -04:00) America/Lower_Princes</option>
                    <option value="America/Manaus" <?php if ($system['timezone'] == 'America/Manaus') : ?> selected <?php endif ?> >(UTC -04:00) America/Manaus</option>
                    <option value="America/Marigot" <?php if ($system['timezone'] == 'America/Marigot') : ?> selected <?php endif ?> >(UTC -04:00) America/Marigot</option>
                    <option value="America/Martinique" <?php if ($system['timezone'] == 'America/Martinique') : ?> selected <?php endif ?> >(UTC -04:00) America/Martinique</option>
                    <option value="America/Moncton" <?php if ($system['timezone'] == 'America/Moncton') : ?> selected <?php endif ?> >(UTC -04:00) America/Moncton</option>
                    <option value="America/Montserrat" <?php if ($system['timezone'] == 'America/Montserrat') : ?> selected <?php endif ?> >(UTC -04:00) America/Montserrat</option>
                    <option value="America/Port_of_Spain" <?php if ($system['timezone'] == 'America/Port_of_Spain') : ?> selected <?php endif ?> >(UTC -04:00) America/Port_of_Spain</option>
                    <option value="America/Porto_Velho" <?php if ($system['timezone'] == 'America/Porto_Velho') : ?> selected <?php endif ?> >(UTC -04:00) America/Porto_Velho</option>
                    <option value="America/Puerto_Rico" <?php if ($system['timezone'] == 'America/Puerto_Rico') : ?> selected <?php endif ?> >(UTC -04:00) America/Puerto_Rico</option>
                    <option value="America/Santo_Domingo" <?php if ($system['timezone'] == 'America/Santo_Domingo') : ?> selected <?php endif ?> >(UTC -04:00) America/Santo_Domingo</option>
                    <option value="America/St_Barthelemy" <?php if ($system['timezone'] == 'America/St_Barthelemy') : ?> selected <?php endif ?> >(UTC -04:00) America/St_Barthelemy</option>
                    <option value="America/St_Kitts" <?php if ($system['timezone'] == 'America/St_Kitts') : ?> selected <?php endif ?> >(UTC -04:00) America/St_Kitts</option>
                    <option value="America/St_Lucia" <?php if ($system['timezone'] == 'America/St_Lucia') : ?> selected <?php endif ?> >(UTC -04:00) America/St_Lucia</option>
                    <option value="America/St_Thomas" <?php if ($system['timezone'] == 'America/St_Thomas') : ?> selected <?php endif ?> >(UTC -04:00) America/St_Thomas</option>
                    <option value="America/St_Vincent" <?php if ($system['timezone'] == 'America/St_Vincent') : ?> selected <?php endif ?> >(UTC -04:00) America/St_Vincent</option>
                    <option value="America/Thule" <?php if ($system['timezone'] == 'America/Thule') : ?> selected <?php endif ?> >(UTC -04:00) America/Thule</option>
                    <option value="America/Tortola" <?php if ($system['timezone'] == 'America/Tortola') : ?> selected <?php endif ?> >(UTC -04:00) America/Tortola</option>
                    <option value="Atlantic/Bermuda" <?php if ($system['timezone'] == 'Atlantic/Bermuda') : ?> selected <?php endif ?> >(UTC -04:00) Atlantic/Bermuda</option>
                    <option value="America/St_Johns" <?php if ($system['timezone'] == 'America/St_Johns') : ?> selected <?php endif ?> >(UTC -03:30) America/St_Johns</option>
                    <option value="America/Araguaina" <?php if ($system['timezone'] == 'America/Araguaina') : ?> selected <?php endif ?> >(UTC -03:00) America/Araguaina</option>
                    <option value="America/Argentina/Buenos_Aires" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/Buenos_Aires</option>
                    <option value="America/Argentina/Catamarca" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/Catamarca</option>
                    <option value="America/Argentina/Cordoba" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/Cordoba</option>
                    <option value="America/Argentina/Jujuy" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/Jujuy</option>
                    <option value="America/Argentina/La_Rioja" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/La_Rioja</option>
                    <option value="America/Argentina/Mendoza" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/Mendoza</option>
                    <option value="America/Argentina/Rio_Gallegos" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/Rio_Gallegos</option>
                    <option value="America/Argentina/Salta" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/Salta</option>
                    <option value="America/Argentina/San_Juan" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/San_Juan</option>
                    <option value="America/Argentina/San_Luis" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/San_Luis</option>
                    <option value="America/Argentina/Tucuman" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/Tucuman</option>
                    <option value="America/Argentina/Ushuaia" <?php if ($system['timezone'] == 'America/Argentina') : ?> selected <?php endif ?> >(UTC -03:00) America/Argentina/Ushuaia</option>
                    <option value="America/Asuncion" <?php if ($system['timezone'] == 'America/Asuncion') : ?> selected <?php endif ?> >(UTC -03:00) America/Asuncion</option>
                    <option value="America/Bahia" <?php if ($system['timezone'] == 'America/Bahia') : ?> selected <?php endif ?> >(UTC -03:00) America/Bahia</option>
                    <option value="America/Belem" <?php if ($system['timezone'] == 'America/Belem') : ?> selected <?php endif ?> >(UTC -03:00) America/Belem</option>
                    <option value="America/Campo_Grande" <?php if ($system['timezone'] == 'America/Campo_Grande') : ?> selected <?php endif ?> >(UTC -03:00) America/Campo_Grande</option>
                    <option value="America/Cayenne" <?php if ($system['timezone'] == 'America/Cayenne') : ?> selected <?php endif ?> >(UTC -03:00) America/Cayenne</option>
                    <option value="America/Cuiaba" <?php if ($system['timezone'] == 'America/Cuiaba') : ?> selected <?php endif ?> >(UTC -03:00) America/Cuiaba</option>
                    <option value="America/Fortaleza" <?php if ($system['timezone'] == 'America/Fortaleza') : ?> selected <?php endif ?> >(UTC -03:00) America/Fortaleza</option>
                    <option value="America/Godthab" <?php if ($system['timezone'] == 'America/Godthab') : ?> selected <?php endif ?> >(UTC -03:00) America/Godthab</option>
                    <option value="America/Maceio" <?php if ($system['timezone'] == 'America/Maceio') : ?> selected <?php endif ?> >(UTC -03:00) America/Maceio</option>
                    <option value="America/Miquelon" <?php if ($system['timezone'] == 'America/Miquelon') : ?> selected <?php endif ?> >(UTC -03:00) America/Miquelon</option>
                    <option value="America/Montevideo" <?php if ($system['timezone'] == 'America/Montevideo') : ?> selected <?php endif ?> >(UTC -03:00) America/Montevideo</option>
                    <option value="America/Paramaribo" <?php if ($system['timezone'] == 'America/Paramaribo') : ?> selected <?php endif ?> >(UTC -03:00) America/Paramaribo</option>
                    <option value="America/Punta_Arenas" <?php if ($system['timezone'] == 'America/Punta_Arenas') : ?> selected <?php endif ?> >(UTC -03:00) America/Punta_Arenas</option>
                    <option value="America/Recife" <?php if ($system['timezone'] == 'America/Recife') : ?> selected <?php endif ?> >(UTC -03:00) America/Recife</option>
                    <option value="America/Santarem" <?php if ($system['timezone'] == 'America/Santarem') : ?> selected <?php endif ?> >(UTC -03:00) America/Santarem</option>
                    <option value="America/Santiago" <?php if ($system['timezone'] == 'America/Santiago') : ?> selected <?php endif ?> >(UTC -03:00) America/Santiago</option>
                    <option value="Antarctica/Palmer" <?php if ($system['timezone'] == 'Antarctica/Palmer') : ?> selected <?php endif ?> >(UTC -03:00) Antarctica/Palmer</option>
                    <option value="Antarctica/Rothera" <?php if ($system['timezone'] == 'Antarctica/Rothera') : ?> selected <?php endif ?> >(UTC -03:00) Antarctica/Rothera</option>
                    <option value="Atlantic/Stanley" <?php if ($system['timezone'] == 'Atlantic/Stanley') : ?> selected <?php endif ?> >(UTC -03:00) Atlantic/Stanley</option>
                    <option value="America/Noronha" <?php if ($system['timezone'] == 'America/Noronha') : ?> selected <?php endif ?> >(UTC -02:00) America/Noronha</option>
                    <option value="America/Sao_Paulo" <?php if ($system['timezone'] == 'America/Sao_Paulo') : ?> selected <?php endif ?> >(UTC -02:00) America/Sao_Paulo</option>
                    <option value="Atlantic/South_Georgia" <?php if ($system['timezone'] == 'Atlantic/South_Georgia') : ?> selected <?php endif ?> >(UTC -02:00) Atlantic/South_Georgia</option>
                    <option value="America/Scoresbysund" <?php if ($system['timezone'] == 'America/Scoresbysund') : ?> selected <?php endif ?> >(UTC -01:00) America/Scoresbysund</option>
                    <option value="Atlantic/Azores" <?php if ($system['timezone'] == 'Atlantic/Azores') : ?> selected <?php endif ?> >(UTC -01:00) Atlantic/Azores</option>
                    <option value="Atlantic/Cape_Verde" <?php if ($system['timezone'] == 'Atlantic/Cape_Verde') : ?> selected <?php endif ?> >(UTC -01:00) Atlantic/Cape_Verde</option>
                    <option value="Africa/Abidjan" <?php if ($system['timezone'] == 'Africa/Abidjan') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Abidjan</option>
                    <option value="Africa/Accra" <?php if ($system['timezone'] == 'Africa/Accra') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Accra</option>
                    <option value="Africa/Bamako" <?php if ($system['timezone'] == 'Africa/Bamako') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Bamako</option>
                    <option value="Africa/Banjul" <?php if ($system['timezone'] == 'Africa/Banjul') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Banjul</option>
                    <option value="Africa/Bissau" <?php if ($system['timezone'] == 'Africa/Bissau') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Bissau</option>
                    <option value="Africa/Casablanca" <?php if ($system['timezone'] == 'Africa/Casablanca') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Casablanca</option>
                    <option value="Africa/Conakry" <?php if ($system['timezone'] == 'Africa/Conakry') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Conakry</option>
                    <option value="Africa/Dakar" <?php if ($system['timezone'] == 'Africa/Dakar') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Dakar</option>
                    <option value="Africa/El_Aaiun" <?php if ($system['timezone'] == 'Africa/El_Aaiun') : ?> selected <?php endif ?> >(UTC -00:00) Africa/El_Aaiun</option>
                    <option value="Africa/Freetown" <?php if ($system['timezone'] == 'Africa/Freetown') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Freetown</option>
                    <option value="Africa/Lome" <?php if ($system['timezone'] == 'Africa/Lome') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Lome</option>
                    <option value="Africa/Monrovia" <?php if ($system['timezone'] == 'Africa/Monrovia') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Monrovia</option>
                    <option value="Africa/Nouakchott" <?php if ($system['timezone'] == 'Africa/Nouakchott') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Nouakchott</option>
                    <option value="Africa/Ouagadougou" <?php if ($system['timezone'] == 'Africa/Ouagadougou') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Ouagadougou</option>
                    <option value="Africa/Sao_Tome" <?php if ($system['timezone'] == 'Africa/Sao_Tome') : ?> selected <?php endif ?> >(UTC -00:00) Africa/Sao_Tome</option>
                    <option value="America/Danmarkshavn" <?php if ($system['timezone'] == 'America/Danmarkshavn') : ?> selected <?php endif ?> >(UTC -00:00) America/Danmarkshavn</option>
                    <option value="Antarctica/Troll" <?php if ($system['timezone'] == 'Antarctica/Troll') : ?> selected <?php endif ?> >(UTC -00:00) Antarctica/Troll</option>
                    <option value="Atlantic/Canary" <?php if ($system['timezone'] == 'Atlantic/Canary') : ?> selected <?php endif ?> >(UTC -00:00) Atlantic/Canary</option>
                    <option value="Atlantic/Faroe" <?php if ($system['timezone'] == 'Atlantic/Faroe') : ?> selected <?php endif ?> >(UTC -00:00) Atlantic/Faroe</option>
                    <option value="Atlantic/Madeira" <?php if ($system['timezone'] == 'Atlantic/Madeira') : ?> selected <?php endif ?> >(UTC -00:00) Atlantic/Madeira</option>
                    <option value="Atlantic/Reykjavik" <?php if ($system['timezone'] == 'Atlantic/Reykjavik') : ?> selected <?php endif ?> >(UTC -00:00) Atlantic/Reykjavik</option>
                    <option value="Atlantic/St_Helena" <?php if ($system['timezone'] == 'Atlantic/St_Helena') : ?> selected <?php endif ?> >(UTC -00:00) Atlantic/St_Helena</option>
                    <option value="Europe/Dublin" <?php if ($system['timezone'] == 'Europe/Dublin') : ?> selected <?php endif ?> >(UTC -00:00) Europe/Dublin</option>
                    <option value="Europe/Guernsey" <?php if ($system['timezone'] == 'Europe/Guernsey') : ?> selected <?php endif ?> >(UTC -00:00) Europe/Guernsey</option>
                    <option value="Europe/Isle_of_Man" <?php if ($system['timezone'] == 'Europe/Isle_of_Man') : ?> selected <?php endif ?> >(UTC -00:00) Europe/Isle_of_Man</option>
                    <option value="Europe/Jersey" <?php if ($system['timezone'] == 'Europe/Jersey') : ?> selected <?php endif ?> >(UTC -00:00) Europe/Jersey</option>
                    <option value="Europe/Lisbon" <?php if ($system['timezone'] == 'Europe/Lisbon') : ?> selected <?php endif ?> >(UTC -00:00) Europe/Lisbon</option>
                    <option value="Europe/London" <?php if ($system['timezone'] == 'Europe/London') : ?> selected <?php endif ?> >(UTC -00:00) Europe/London</option>
                    <option value="UTC" <?php if ($system['timezone'] == 'UTC"') : ?> selected <?php endif ?> >(UTC -00:00) UTC</option>
                    <option value="Africa/Algiers" <?php if ($system['timezone'] == 'Africa/Algiers') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Algiers</option>
                    <option value="Africa/Bangui" <?php if ($system['timezone'] == 'Africa/Bangui') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Bangui</option>
                    <option value="Africa/Brazzaville" <?php if ($system['timezone'] == 'Africa/Brazzaville') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Brazzaville</option>
                    <option value="Africa/Ceuta" <?php if ($system['timezone'] == 'Africa/Ceuta') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Ceuta</option>
                    <option value="Africa/Douala" <?php if ($system['timezone'] == 'Africa/Douala') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Douala</option>
                    <option value="Africa/Kinshasa" <?php if ($system['timezone'] == 'Africa/Kinshasa') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Kinshasa</option>
                    <option value="Africa/Lagos" <?php if ($system['timezone'] == 'Africa/Lagos') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Lagos</option>
                    <option value="Africa/Libreville" <?php if ($system['timezone'] == 'Africa/Libreville') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Libreville</option>
                    <option value="Africa/Luanda" <?php if ($system['timezone'] == 'Africa/Luanda') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Luanda</option>
                    <option value="Africa/Malabo" <?php if ($system['timezone'] == 'Africa/Malabo') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Malabo</option>
                    <option value="Africa/Ndjamena" <?php if ($system['timezone'] == 'Africa/Ndjamena') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Ndjamena</option>
                    <option value="Africa/Niamey" <?php if ($system['timezone'] == 'Africa/Niamey') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Niamey</option>
                    <option value="Africa/Porto-Novo" <?php if ($system['timezone'] == 'Africa/Porto') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Porto-Novo</option>
                    <option value="Africa/Tunis" <?php if ($system['timezone'] == 'Africa/Tunis') : ?> selected <?php endif ?> >(UTC +01:00) Africa/Tunis</option>
                    <option value="Arctic/Longyearbyen" <?php if ($system['timezone'] == 'Arctic/Longyearbyen') : ?> selected <?php endif ?> >(UTC +01:00) Arctic/Longyearbyen</option>
                    <option value="Europe/Amsterdam" <?php if ($system['timezone'] == 'Europe/Amsterdam') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Amsterdam</option>
                    <option value="Europe/Andorra" <?php if ($system['timezone'] == 'Europe/Andorra') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Andorra</option>
                    <option value="Europe/Belgrade" <?php if ($system['timezone'] == 'Europe/Belgrade') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Belgrade</option>
                    <option value="Europe/Berlin" <?php if ($system['timezone'] == 'Europe/Berlin') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Berlin</option>
                    <option value="Europe/Bratislava" <?php if ($system['timezone'] == 'Europe/Bratislava') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Bratislava</option>
                    <option value="Europe/Brussels" <?php if ($system['timezone'] == 'Europe/Brussels') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Brussels</option>
                    <option value="Europe/Budapest" <?php if ($system['timezone'] == 'Europe/Budapest') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Budapest</option>
                    <option value="Europe/Busingen" <?php if ($system['timezone'] == 'Europe/Busingen') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Busingen</option>
                    <option value="Europe/Copenhagen" <?php if ($system['timezone'] == 'Europe/Copenhagen') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Copenhagen</option>
                    <option value="Europe/Gibraltar" <?php if ($system['timezone'] == 'Europe/Gibraltar') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Gibraltar</option>
                    <option value="Europe/Ljubljana" <?php if ($system['timezone'] == 'Europe/Ljubljana') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Ljubljana</option>
                    <option value="Europe/Luxembourg" <?php if ($system['timezone'] == 'Europe/Luxembourg') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Luxembourg</option>
                    <option value="Europe/Madrid" <?php if ($system['timezone'] == 'Europe/Madrid') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Madrid</option>
                    <option value="Europe/Malta" <?php if ($system['timezone'] == 'Europe/Malta') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Malta</option>
                    <option value="Europe/Monaco" <?php if ($system['timezone'] == 'Europe/Monaco') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Monaco</option>
                    <option value="Europe/Oslo" <?php if ($system['timezone'] == 'Europe/Oslo') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Oslo</option>
                    <option value="Europe/Paris" <?php if ($system['timezone'] == 'Europe/Paris') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Paris</option>
                    <option value="Europe/Podgorica" <?php if ($system['timezone'] == 'Europe/Podgorica') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Podgorica</option>
                    <option value="Europe/Prague" <?php if ($system['timezone'] == 'Europe/Prague') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Prague</option>
                    <option value="Europe/Rome" <?php if ($system['timezone'] == 'Europe/Rome') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Rome</option>
                    <option value="Europe/San_Marino" <?php if ($system['timezone'] == 'Europe/San_Marino') : ?> selected <?php endif ?> >(UTC +01:00) Europe/San_Marino</option>
                    <option value="Europe/Sarajevo" <?php if ($system['timezone'] == 'Europe/Sarajevo') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Sarajevo</option>
                    <option value="Europe/Skopje" <?php if ($system['timezone'] == 'Europe/Skopje') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Skopje</option>
                    <option value="Europe/Stockholm" <?php if ($system['timezone'] == 'Europe/Stockholm') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Stockholm</option>
                    <option value="Europe/Tirane" <?php if ($system['timezone'] == 'Europe/Tirane') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Tirane</option>
                    <option value="Europe/Vaduz" <?php if ($system['timezone'] == 'Europe/Vaduz') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Vaduz</option>
                    <option value="Europe/Vatican" <?php if ($system['timezone'] == 'Europe/Vatican') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Vatican</option>
                    <option value="Europe/Vienna" <?php if ($system['timezone'] == 'Europe/Vienna') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Vienna</option>
                    <option value="Europe/Warsaw" <?php if ($system['timezone'] == 'Europe/Warsaw') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Warsaw</option>
                    <option value="Europe/Zagreb" <?php if ($system['timezone'] == 'Europe/Zagreb') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Zagreb</option>
                    <option value="Europe/Zurich" <?php if ($system['timezone'] == 'Europe/Zurich') : ?> selected <?php endif ?> >(UTC +01:00) Europe/Zurich</option>
                    <option value="Africa/Blantyre" <?php if ($system['timezone'] == 'Africa/Blantyre') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Blantyre</option>
                    <option value="Africa/Bujumbura" <?php if ($system['timezone'] == 'Africa/Bujumbura') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Bujumbura</option>
                    <option value="Africa/Cairo" <?php if ($system['timezone'] == 'Africa/Cairo') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Cairo</option>
                    <option value="Africa/Gaborone" <?php if ($system['timezone'] == 'Africa/Gaborone') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Gaborone</option>
                    <option value="Africa/Harare" <?php if ($system['timezone'] == 'Africa/Harare') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Harare</option>
                    <option value="Africa/Johannesburg" <?php if ($system['timezone'] == 'Africa/Johannesburg') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Johannesburg</option>
                    <option value="Africa/Kigali" <?php if ($system['timezone'] == 'Africa/Kigali') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Kigali</option>
                    <option value="Africa/Lubumbashi" <?php if ($system['timezone'] == 'Africa/Lubumbashi') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Lubumbashi</option>
                    <option value="Africa/Lusaka" <?php if ($system['timezone'] == 'Africa/Lusaka') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Lusaka</option>
                    <option value="Africa/Maputo" <?php if ($system['timezone'] == 'Africa/Maputo') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Maputo</option>
                    <option value="Africa/Maseru" <?php if ($system['timezone'] == 'Africa/Maseru') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Maseru</option>
                    <option value="Africa/Mbabane" <?php if ($system['timezone'] == 'Africa/Mbabane') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Mbabane</option>
                    <option value="Africa/Tripoli" <?php if ($system['timezone'] == 'Africa/Tripoli') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Tripoli</option>
                    <option value="Africa/Windhoek" <?php if ($system['timezone'] == 'Africa/Windhoek') : ?> selected <?php endif ?> >(UTC +02:00) Africa/Windhoek</option>
                    <option value="Asia/Amman" <?php if ($system['timezone'] == 'Asia/Amman') : ?> selected <?php endif ?> >(UTC +02:00) Asia/Amman</option>
                    <option value="Asia/Beirut" <?php if ($system['timezone'] == 'Asia/Beirut') : ?> selected <?php endif ?> >(UTC +02:00) Asia/Beirut</option>
                    <option value="Asia/Damascus" <?php if ($system['timezone'] == 'Asia/Damascus') : ?> selected <?php endif ?> >(UTC +02:00) Asia/Damascus</option>
                    <option value="Asia/Gaza" <?php if ($system['timezone'] == 'Asia/Gaza') : ?> selected <?php endif ?> >(UTC +02:00) Asia/Gaza</option>
                    <option value="Asia/Hebron" <?php if ($system['timezone'] == 'Asia/Hebron') : ?> selected <?php endif ?> >(UTC +02:00) Asia/Hebron</option>
                    <option value="Asia/Jerusalem" <?php if ($system['timezone'] == 'Asia/Jerusalem') : ?> selected <?php endif ?> >(UTC +02:00) Asia/Jerusalem</option>
                    <option value="Asia/Nicosia" <?php if ($system['timezone'] == 'Asia/Nicosia') : ?> selected <?php endif ?> >(UTC +02:00) Asia/Nicosia</option>
                    <option value="Europe/Athens" <?php if ($system['timezone'] == 'Europe/Athens') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Athens</option>
                    <option value="Europe/Bucharest" <?php if ($system['timezone'] == 'Europe/Bucharest') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Bucharest</option>
                    <option value="Europe/Chisinau" <?php if ($system['timezone'] == 'Europe/Chisinau') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Chisinau</option>
                    <option value="Europe/Helsinki" <?php if ($system['timezone'] == 'Europe/Helsinki') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Helsinki</option>
                    <option value="Europe/Kaliningrad" <?php if ($system['timezone'] == 'Europe/Kaliningrad') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Kaliningrad</option>
                    <option value="Europe/Kiev" <?php if ($system['timezone'] == 'Europe/Kiev') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Kiev</option>
                    <option value="Europe/Mariehamn" <?php if ($system['timezone'] == 'Europe/Mariehamn') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Mariehamn</option>
                    <option value="Europe/Riga" <?php if ($system['timezone'] == 'Europe/Riga') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Riga</option>
                    <option value="Europe/Sofia" <?php if ($system['timezone'] == 'Europe/Sofia') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Sofia</option>
                    <option value="Europe/Tallinn" <?php if ($system['timezone'] == 'Europe/Tallinn') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Tallinn</option>
                    <option value="Europe/Uzhgorod" <?php if ($system['timezone'] == 'Europe/Uzhgorod') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Uzhgorod</option>
                    <option value="Europe/Vilnius" <?php if ($system['timezone'] == 'Europe/Vilnius') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Vilnius</option>
                    <option value="Europe/Zaporozhye" <?php if ($system['timezone'] == 'Europe/Zaporozhye') : ?> selected <?php endif ?> >(UTC +02:00) Europe/Zaporozhye</option>
                    <option value="Africa/Addis_Ababa" <?php if ($system['timezone'] == 'Africa/Addis_Ababa') : ?> selected <?php endif ?> >(UTC +03:00) Africa/Addis_Ababa</option>
                    <option value="Africa/Asmara" <?php if ($system['timezone'] == 'Africa/Asmara') : ?> selected <?php endif ?> >(UTC +03:00) Africa/Asmara</option>
                    <option value="Africa/Dar_es_Salaam" <?php if ($system['timezone'] == 'Africa/Dar_es_Salaam') : ?> selected <?php endif ?> >(UTC +03:00) Africa/Dar_es_Salaam</option>
                    <option value="Africa/Djibouti" <?php if ($system['timezone'] == 'Africa/Djibouti') : ?> selected <?php endif ?> >(UTC +03:00) Africa/Djibouti</option>
                    <option value="Africa/Juba" <?php if ($system['timezone'] == 'Africa/Juba') : ?> selected <?php endif ?> >(UTC +03:00) Africa/Juba</option>
                    <option value="Africa/Kampala" <?php if ($system['timezone'] == 'Africa/Kampala') : ?> selected <?php endif ?> >(UTC +03:00) Africa/Kampala</option>
                    <option value="Africa/Khartoum" <?php if ($system['timezone'] == 'Africa/Khartoum') : ?> selected <?php endif ?> >(UTC +03:00) Africa/Khartoum</option>
                    <option value="Africa/Mogadishu" <?php if ($system['timezone'] == 'Africa/Mogadishu') : ?> selected <?php endif ?> >(UTC +03:00) Africa/Mogadishu</option>
                    <option value="Africa/Nairobi" <?php if ($system['timezone'] == 'Africa/Nairobi') : ?> selected <?php endif ?> >(UTC +03:00) Africa/Nairobi</option>
                    <option value="Antarctica/Syowa" <?php if ($system['timezone'] == 'Antarctica/Syowa') : ?> selected <?php endif ?> >(UTC +03:00) Antarctica/Syowa</option>
                    <option value="Asia/Aden" <?php if ($system['timezone'] == 'Asia/Aden') : ?> selected <?php endif ?> >(UTC +03:00) Asia/Aden</option>
                    <option value="Asia/Baghdad" <?php if ($system['timezone'] == 'Asia/Baghdad') : ?> selected <?php endif ?> >(UTC +03:00) Asia/Baghdad</option>
                    <option value="Asia/Bahrain" <?php if ($system['timezone'] == 'Asia/Bahrain') : ?> selected <?php endif ?> >(UTC +03:00) Asia/Bahrain</option>
                    <option value="Asia/Famagusta" <?php if ($system['timezone'] == 'Asia/Famagusta') : ?> selected <?php endif ?> >(UTC +03:00) Asia/Famagusta</option>
                    <option value="Asia/Kuwait" <?php if ($system['timezone'] == 'Asia/Kuwait') : ?> selected <?php endif ?> >(UTC +03:00) Asia/Kuwait</option>
                    <option value="Asia/Qatar" <?php if ($system['timezone'] == 'Asia/Qatar') : ?> selected <?php endif ?> >(UTC +03:00) Asia/Qatar</option>
                    <option value="Asia/Riyadh" <?php if ($system['timezone'] == 'Asia/Riyadh') : ?> selected <?php endif ?> >(UTC +03:00) Asia/Riyadh</option>
                    <option value="Europe/Istanbul" <?php if ($system['timezone'] == 'Europe/Istanbul') : ?> selected <?php endif ?> >(UTC +03:00) Europe/Istanbul</option>
                    <option value="Europe/Kirov" <?php if ($system['timezone'] == 'Europe/Kirov') : ?> selected <?php endif ?> >(UTC +03:00) Europe/Kirov</option>
                    <option value="Europe/Minsk" <?php if ($system['timezone'] == 'Europe/Minsk') : ?> selected <?php endif ?> >(UTC +03:00) Europe/Minsk</option>
                    <option value="Europe/Moscow" <?php if ($system['timezone'] == 'Europe/Moscow') : ?> selected <?php endif ?> >(UTC +03:00) Europe/Moscow</option>
                    <option value="Europe/Simferopol" <?php if ($system['timezone'] == 'Europe/Simferopol') : ?> selected <?php endif ?> >(UTC +03:00) Europe/Simferopol</option>
                    <option value="Europe/Volgograd" <?php if ($system['timezone'] == 'Europe/Volgograd') : ?> selected <?php endif ?> >(UTC +03:00) Europe/Volgograd</option>
                    <option value="Indian/Antananarivo" <?php if ($system['timezone'] == 'Indian/Antananarivo') : ?> selected <?php endif ?> >(UTC +03:00) Indian/Antananarivo</option>
                    <option value="Indian/Comoro" <?php if ($system['timezone'] == 'Indian/Comoro') : ?> selected <?php endif ?> >(UTC +03:00) Indian/Comoro</option>
                    <option value="Indian/Mayotte" <?php if ($system['timezone'] == 'Indian/Mayotte') : ?> selected <?php endif ?> >(UTC +03:00) Indian/Mayotte</option>
                    <option value="Asia/Tehran" <?php if ($system['timezone'] == 'Asia/Tehran') : ?> selected <?php endif ?> >(UTC +03:30) Asia/Tehran</option>
                    <option value="Asia/Baku" <?php if ($system['timezone'] == 'Asia/Baku') : ?> selected <?php endif ?> >(UTC +04:00) Asia/Baku</option>
                    <option value="Asia/Dubai" <?php if ($system['timezone'] == 'Asia/Dubai') : ?> selected <?php endif ?> >(UTC +04:00) Asia/Dubai</option>
                    <option value="Asia/Muscat" <?php if ($system['timezone'] == 'Asia/Muscat') : ?> selected <?php endif ?> >(UTC +04:00) Asia/Muscat</option>
                    <option value="Asia/Tbilisi" <?php if ($system['timezone'] == 'Asia/Tbilisi') : ?> selected <?php endif ?> >(UTC +04:00) Asia/Tbilisi</option>
                    <option value="Asia/Yerevan" <?php if ($system['timezone'] == 'Asia/Yerevan') : ?> selected <?php endif ?> >(UTC +04:00) Asia/Yerevan</option>
                    <option value="Europe/Astrakhan" <?php if ($system['timezone'] == 'Europe/Astrakhan') : ?> selected <?php endif ?> >(UTC +04:00) Europe/Astrakhan</option>
                    <option value="Europe/Samara" <?php if ($system['timezone'] == 'Europe/Samara') : ?> selected <?php endif ?> >(UTC +04:00) Europe/Samara</option>
                    <option value="Europe/Saratov" <?php if ($system['timezone'] == 'Europe/Saratov') : ?> selected <?php endif ?> >(UTC +04:00) Europe/Saratov</option>
                    <option value="Europe/Ulyanovsk" <?php if ($system['timezone'] == 'Europe/Ulyanovsk') : ?> selected <?php endif ?> >(UTC +04:00) Europe/Ulyanovsk</option>
                    <option value="Indian/Mahe" <?php if ($system['timezone'] == 'Indian/Mahe') : ?> selected <?php endif ?> >(UTC +04:00) Indian/Mahe</option>
                    <option value="Indian/Mauritius" <?php if ($system['timezone'] == 'Indian/Mauritius') : ?> selected <?php endif ?> >(UTC +04:00) Indian/Mauritius</option>
                    <option value="Indian/Reunion" <?php if ($system['timezone'] == 'Indian/Reunion') : ?> selected <?php endif ?> >(UTC +04:00) Indian/Reunion</option>
                    <option value="Asia/Kabul" <?php if ($system['timezone'] == 'Asia/Kabul') : ?> selected <?php endif ?> >(UTC +04:30) Asia/Kabul</option>
                    <option value="Antarctica/Mawson" <?php if ($system['timezone'] == 'Antarctica/Mawson') : ?> selected <?php endif ?> >(UTC +05:00) Antarctica/Mawson</option>
                    <option value="Asia/Aqtau" <?php if ($system['timezone'] == 'Asia/Aqtau') : ?> selected <?php endif ?> >(UTC +05:00) Asia/Aqtau</option>
                    <option value="Asia/Aqtobe" <?php if ($system['timezone'] == 'Asia/Aqtobe') : ?> selected <?php endif ?> >(UTC +05:00) Asia/Aqtobe</option>
                    <option value="Asia/Ashgabat" <?php if ($system['timezone'] == 'Asia/Ashgabat') : ?> selected <?php endif ?> >(UTC +05:00) Asia/Ashgabat</option>
                    <option value="Asia/Atyrau" <?php if ($system['timezone'] == 'Asia/Atyrau') : ?> selected <?php endif ?> >(UTC +05:00) Asia/Atyrau</option>
                    <option value="Asia/Dushanbe" <?php if ($system['timezone'] == 'Asia/Dushanbe') : ?> selected <?php endif ?> >(UTC +05:00) Asia/Dushanbe</option>
                    <option value="Asia/Karachi" <?php if ($system['timezone'] == 'Asia/Karachi') : ?> selected <?php endif ?> >(UTC +05:00) Asia/Karachi</option>
                    <option value="Asia/Oral" <?php if ($system['timezone'] == 'Asia/Oral') : ?> selected <?php endif ?> >(UTC +05:00) Asia/Oral</option>
                    <option value="Asia/Samarkand" <?php if ($system['timezone'] == 'Asia/Samarkand') : ?> selected <?php endif ?> >(UTC +05:00) Asia/Samarkand</option>
                    <option value="Asia/Tashkent" <?php if ($system['timezone'] == 'Asia/Tashkent') : ?> selected <?php endif ?> >(UTC +05:00) Asia/Tashkent</option>
                    <option value="Asia/Yekaterinburg" <?php if ($system['timezone'] == 'Asia/Yekaterinburg') : ?> selected <?php endif ?> >(UTC +05:00) Asia/Yekaterinburg</option>
                    <option value="Indian/Kerguelen" <?php if ($system['timezone'] == 'Indian/Kerguelen') : ?> selected <?php endif ?> >(UTC +05:00) Indian/Kerguelen</option>
                    <option value="Indian/Maldives" <?php if ($system['timezone'] == 'Indian/Maldives') : ?> selected <?php endif ?> >(UTC +05:00) Indian/Maldives</option>
                    <option value="Asia/Colombo" <?php if ($system['timezone'] == 'Asia/Colombo') : ?> selected <?php endif ?> >(UTC +05:30) Asia/Colombo</option>
                    <option value="Asia/Kolkata" <?php if ($system['timezone'] == 'Asia/Kolkata') : ?> selected <?php endif ?> >(UTC +05:30) Asia/Kolkata</option>
                    <option value="Asia/Kathmandu" <?php if ($system['timezone'] == 'Asia/Kathmandu') : ?> selected <?php endif ?> >(UTC +05:45) Asia/Kathmandu</option>
                    <option value="Antarctica/Vostok" <?php if ($system['timezone'] == 'Antarctica/Vostok') : ?> selected <?php endif ?> >(UTC +06:00) Antarctica/Vostok</option>
                    <option value="Asia/Almaty" <?php if ($system['timezone'] == 'Asia/Almaty') : ?> selected <?php endif ?> >(UTC +06:00) Asia/Almaty</option>
                    <option value="Asia/Bishkek" <?php if ($system['timezone'] == 'Asia/Bishkek') : ?> selected <?php endif ?> >(UTC +06:00) Asia/Bishkek</option>
                    <option value="Asia/Dhaka" <?php if ($system['timezone'] == 'Asia/Dhaka') : ?> selected <?php endif ?> >(UTC +06:00) Asia/Dhaka</option>
                    <option value="Asia/Omsk" <?php if ($system['timezone'] == 'Asia/Omsk') : ?> selected <?php endif ?> >(UTC +06:00) Asia/Omsk</option>
                    <option value="Asia/Qyzylorda" <?php if ($system['timezone'] == 'Asia/Qyzylorda') : ?> selected <?php endif ?> >(UTC +06:00) Asia/Qyzylorda</option>
                    <option value="Asia/Thimphu" <?php if ($system['timezone'] == 'Asia/Thimphu') : ?> selected <?php endif ?> >(UTC +06:00) Asia/Thimphu</option>
                    <option value="Asia/Urumqi" <?php if ($system['timezone'] == 'Asia/Urumqi') : ?> selected <?php endif ?> >(UTC +06:00) Asia/Urumqi</option>
                    <option value="Indian/Chagos" <?php if ($system['timezone'] == 'Indian/Chagos') : ?> selected <?php endif ?> >(UTC +06:00) Indian/Chagos</option>
                    <option value="Asia/Yangon" <?php if ($system['timezone'] == 'Asia/Yangon') : ?> selected <?php endif ?> >(UTC +06:30) Asia/Yangon</option>
                    <option value="Indian/Cocos" <?php if ($system['timezone'] == 'Indian/Cocos') : ?> selected <?php endif ?> >(UTC +06:30) Indian/Cocos</option>
                    <option value="Antarctica/Davis" <?php if ($system['timezone'] == 'Antarctica/Davis') : ?> selected <?php endif ?> >(UTC +07:00) Antarctica/Davis</option>
                    <option value="Asia/Bangkok" <?php if ($system['timezone'] == 'Asia/Bangkok') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Bangkok</option>
                    <option value="Asia/Barnaul" <?php if ($system['timezone'] == 'Asia/Barnaul') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Barnaul</option>
                    <option value="Asia/Ho_Chi_Minh" <?php if ($system['timezone'] == 'Asia/Ho_Chi_Minh') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Ho_Chi_Minh</option>
                    <option value="Asia/Hovd" <?php if ($system['timezone'] == 'Asia/Hovd') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Hovd</option>
                    <option value="Asia/Jakarta" <?php if ($system['timezone'] == 'Asia/Jakarta') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Jakarta</option>
                    <option value="Asia/Krasnoyarsk" <?php if ($system['timezone'] == 'Asia/Krasnoyarsk') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Krasnoyarsk</option>
                    <option value="Asia/Novokuznetsk" <?php if ($system['timezone'] == 'Asia/Novokuznetsk') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Novokuznetsk</option>
                    <option value="Asia/Novosibirsk" <?php if ($system['timezone'] == 'Asia/Novosibirsk') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Novosibirsk</option>
                    <option value="Asia/Phnom_Penh" <?php if ($system['timezone'] == 'Asia/Phnom_Penh') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Phnom_Penh</option>
                    <option value="Asia/Pontianak" <?php if ($system['timezone'] == 'Asia/Pontianak') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Pontianak</option>
                    <option value="Asia/Tomsk" <?php if ($system['timezone'] == 'Asia/Tomsk') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Tomsk</option>
                    <option value="Asia/Vientiane" <?php if ($system['timezone'] == 'Asia/Vientiane') : ?> selected <?php endif ?> >(UTC +07:00) Asia/Vientiane</option>
                    <option value="Indian/Christmas" <?php if ($system['timezone'] == 'Indian/Christmas') : ?> selected <?php endif ?> >(UTC +07:00) Indian/Christmas</option>
                    <option value="Asia/Brunei" <?php if ($system['timezone'] == 'Asia/Brunei') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Brunei</option>
                    <option value="Asia/Choibalsan" <?php if ($system['timezone'] == 'Asia/Choibalsan') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Choibalsan</option>
                    <option value="Asia/Hong_Kong" <?php if ($system['timezone'] == 'Asia/Hong_Kong') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Hong_Kong</option>
                    <option value="Asia/Irkutsk" <?php if ($system['timezone'] == 'Asia/Irkutsk') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Irkutsk</option>
                    <option value="Asia/Kuala_Lumpur" <?php if ($system['timezone'] == 'Asia/Kuala_Lumpur') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Kuala_Lumpur</option>
                    <option value="Asia/Kuching" <?php if ($system['timezone'] == 'Asia/Kuching') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Kuching</option>
                    <option value="Asia/Macau" <?php if ($system['timezone'] == 'Asia/Macau') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Macau</option>
                    <option value="Asia/Makassar" <?php if ($system['timezone'] == 'Asia/Makassar') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Makassar</option>
                    <option value="Asia/Manila" <?php if ($system['timezone'] == 'Asia/Manila') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Manila</option>
                    <option value="Asia/Shanghai" <?php if ($system['timezone'] == 'Asia/Shanghai') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Shanghai</option>
                    <option value="Asia/Singapore" <?php if ($system['timezone'] == 'Asia/Singapore') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Singapore</option>
                    <option value="Asia/Taipei" <?php if ($system['timezone'] == 'Asia/Taipei') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Taipei</option>
                    <option value="Asia/Ulaanbaatar" <?php if ($system['timezone'] == 'Asia/Ulaanbaatar') : ?> selected <?php endif ?> >(UTC +08:00) Asia/Ulaanbaatar</option>
                    <option value="Australia/Perth" <?php if ($system['timezone'] == 'Australia/Perth') : ?> selected <?php endif ?> >(UTC +08:00) Australia/Perth</option>
                    <option value="Asia/Pyongyang" <?php if ($system['timezone'] == 'Asia/Pyongyang') : ?> selected <?php endif ?> >(UTC +08:30) Asia/Pyongyang</option>
                    <option value="Australia/Eucla" <?php if ($system['timezone'] == 'Australia/Eucla') : ?> selected <?php endif ?> >(UTC +08:45) Australia/Eucla</option>
                    <option value="Asia/Chita" <?php if ($system['timezone'] == 'Asia/Chita') : ?> selected <?php endif ?> >(UTC +09:00) Asia/Chita</option>
                    <option value="Asia/Dili" <?php if ($system['timezone'] == 'Asia/Dili') : ?> selected <?php endif ?> >(UTC +09:00) Asia/Dili</option>
                    <option value="Asia/Jayapura" <?php if ($system['timezone'] == 'Asia/Jayapura') : ?> selected <?php endif ?> >(UTC +09:00) Asia/Jayapura</option>
                    <option value="Asia/Khandyga" <?php if ($system['timezone'] == 'Asia/Khandyga') : ?> selected <?php endif ?> >(UTC +09:00) Asia/Khandyga</option>
                    <option value="Asia/Seoul" <?php if ($system['timezone'] == 'Asia/Seoul') : ?> selected <?php endif ?> >(UTC +09:00) Asia/Seoul</option>
                    <option value="Asia/Tokyo" <?php if ($system['timezone'] == 'Asia/Tokyo') : ?> selected <?php endif ?> >(UTC +09:00) Asia/Tokyo</option>
                    <option value="Asia/Yakutsk" <?php if ($system['timezone'] == 'Asia/Yakutsk') : ?> selected <?php endif ?> >(UTC +09:00) Asia/Yakutsk</option>
                    <option value="Pacific/Palau" <?php if ($system['timezone'] == 'Pacific/Palau') : ?> selected <?php endif ?> >(UTC +09:00) Pacific/Palau</option>
                    <option value="Australia/Darwin" <?php if ($system['timezone'] == 'Australia/Darwin') : ?> selected <?php endif ?> >(UTC +09:30) Australia/Darwin</option>
                    <option value="Antarctica/DumontDUrville" <?php if ($system['timezone'] == 'Antarctica/DumontDUrville') : ?> selected <?php endif ?> >(UTC +10:00) Antarctica/DumontDUrville</option>
                    <option value="Asia/Ust-Nera" <?php if ($system['timezone'] == 'Asia/Ust') : ?> selected <?php endif ?> >(UTC +10:00) Asia/Ust-Nera</option>
                    <option value="Asia/Vladivostok" <?php if ($system['timezone'] == 'Asia/Vladivostok') : ?> selected <?php endif ?> >(UTC +10:00) Asia/Vladivostok</option>
                    <option value="Australia/Brisbane" <?php if ($system['timezone'] == 'Australia/Brisbane') : ?> selected <?php endif ?> >(UTC +10:00) Australia/Brisbane</option>
                    <option value="Australia/Lindeman" <?php if ($system['timezone'] == 'Australia/Lindeman') : ?> selected <?php endif ?> >(UTC +10:00) Australia/Lindeman</option>
                    <option value="Pacific/Chuuk" <?php if ($system['timezone'] == 'Pacific/Chuuk') : ?> selected <?php endif ?> >(UTC +10:00) Pacific/Chuuk</option>
                    <option value="Pacific/Guam" <?php if ($system['timezone'] == 'Pacific/Guam') : ?> selected <?php endif ?> >(UTC +10:00) Pacific/Guam</option>
                    <option value="Pacific/Port_Moresby" <?php if ($system['timezone'] == 'Pacific/Port_Moresby') : ?> selected <?php endif ?> >(UTC +10:00) Pacific/Port_Moresby</option>
                    <option value="Pacific/Saipan" <?php if ($system['timezone'] == 'Pacific/Saipan') : ?> selected <?php endif ?> >(UTC +10:00) Pacific/Saipan</option>
                    <option value="Australia/Adelaide" <?php if ($system['timezone'] == 'Australia/Adelaide') : ?> selected <?php endif ?> >(UTC +10:30) Australia/Adelaide</option>
                    <option value="Australia/Broken_Hill" <?php if ($system['timezone'] == 'Australia/Broken_Hill') : ?> selected <?php endif ?> >(UTC +10:30) Australia/Broken_Hill</option>
                    <option value="Antarctica/Casey" <?php if ($system['timezone'] == 'Antarctica/Casey') : ?> selected <?php endif ?> >(UTC +11:00) Antarctica/Casey</option>
                    <option value="Antarctica/Macquarie" <?php if ($system['timezone'] == 'Antarctica/Macquarie') : ?> selected <?php endif ?> >(UTC +11:00) Antarctica/Macquarie</option>
                    <option value="Asia/Magadan" <?php if ($system['timezone'] == 'Asia/Magadan') : ?> selected <?php endif ?> >(UTC +11:00) Asia/Magadan</option>
                    <option value="Asia/Sakhalin" <?php if ($system['timezone'] == 'Asia/Sakhalin') : ?> selected <?php endif ?> >(UTC +11:00) Asia/Sakhalin</option>
                    <option value="Asia/Srednekolymsk" <?php if ($system['timezone'] == 'Asia/Srednekolymsk') : ?> selected <?php endif ?> >(UTC +11:00) Asia/Srednekolymsk</option>
                    <option value="Australia/Currie" <?php if ($system['timezone'] == 'Australia/Currie') : ?> selected <?php endif ?> >(UTC +11:00) Australia/Currie</option>
                    <option value="Australia/Hobart" <?php if ($system['timezone'] == 'Australia/Hobart') : ?> selected <?php endif ?> >(UTC +11:00) Australia/Hobart</option>
                    <option value="Australia/Lord_Howe" <?php if ($system['timezone'] == 'Australia/Lord_Howe') : ?> selected <?php endif ?> >(UTC +11:00) Australia/Lord_Howe</option>
                    <option value="Australia/Melbourne" <?php if ($system['timezone'] == 'Australia/Melbourne') : ?> selected <?php endif ?> >(UTC +11:00) Australia/Melbourne</option>
                    <option value="Australia/Sydney" <?php if ($system['timezone'] == 'Australia/Sydney') : ?> selected <?php endif ?> >(UTC +11:00) Australia/Sydney</option>
                    <option value="Pacific/Bougainville" <?php if ($system['timezone'] == 'Pacific/Bougainville') : ?> selected <?php endif ?> >(UTC +11:00) Pacific/Bougainville</option>
                    <option value="Pacific/Efate" <?php if ($system['timezone'] == 'Pacific/Efate') : ?> selected <?php endif ?> >(UTC +11:00) Pacific/Efate</option>
                    <option value="Pacific/Guadalcanal" <?php if ($system['timezone'] == 'Pacific/Guadalcanal') : ?> selected <?php endif ?> >(UTC +11:00) Pacific/Guadalcanal</option>
                    <option value="Pacific/Kosrae" <?php if ($system['timezone'] == 'Pacific/Kosrae') : ?> selected <?php endif ?> >(UTC +11:00) Pacific/Kosrae</option>
                    <option value="Pacific/Norfolk" <?php if ($system['timezone'] == 'Pacific/Norfolk') : ?> selected <?php endif ?> >(UTC +11:00) Pacific/Norfolk</option>
                    <option value="Pacific/Noumea" <?php if ($system['timezone'] == 'Pacific/Noumea') : ?> selected <?php endif ?> >(UTC +11:00) Pacific/Noumea</option>
                    <option value="Pacific/Pohnpei" <?php if ($system['timezone'] == 'Pacific/Pohnpei') : ?> selected <?php endif ?> >(UTC +11:00) Pacific/Pohnpei</option>
                    <option value="Asia/Anadyr" <?php if ($system['timezone'] == 'Asia/Anadyr') : ?> selected <?php endif ?> >(UTC +12:00) Asia/Anadyr</option>
                    <option value="Asia/Kamchatka" <?php if ($system['timezone'] == 'Asia/Kamchatka') : ?> selected <?php endif ?> >(UTC +12:00) Asia/Kamchatka</option>
                    <option value="Pacific/Funafuti" <?php if ($system['timezone'] == 'Pacific/Funafuti') : ?> selected <?php endif ?> >(UTC +12:00) Pacific/Funafuti</option>
                    <option value="Pacific/Kwajalein" <?php if ($system['timezone'] == 'Pacific/Kwajalein') : ?> selected <?php endif ?> >(UTC +12:00) Pacific/Kwajalein</option>
                    <option value="Pacific/Majuro" <?php if ($system['timezone'] == 'Pacific/Majuro') : ?> selected <?php endif ?> >(UTC +12:00) Pacific/Majuro</option>
                    <option value="Pacific/Nauru" <?php if ($system['timezone'] == 'Pacific/Nauru') : ?> selected <?php endif ?> >(UTC +12:00) Pacific/Nauru</option>
                    <option value="Pacific/Tarawa" <?php if ($system['timezone'] == 'Pacific/Tarawa') : ?> selected <?php endif ?> >(UTC +12:00) Pacific/Tarawa</option>
                    <option value="Pacific/Wake" <?php if ($system['timezone'] == 'Pacific/Wake') : ?> selected <?php endif ?> >(UTC +12:00) Pacific/Wake</option>
                    <option value="Pacific/Wallis" <?php if ($system['timezone'] == 'Pacific/Wallis') : ?> selected <?php endif ?> >(UTC +12:00) Pacific/Wallis</option>
                    <option value="Antarctica/McMurdo" <?php if ($system['timezone'] == 'Antarctica/McMurdo') : ?> selected <?php endif ?> >(UTC +13:00) Antarctica/McMurdo</option>
                    <option value="Pacific/Auckland" <?php if ($system['timezone'] == 'Pacific/Auckland') : ?> selected <?php endif ?> >(UTC +13:00) Pacific/Auckland</option>
                    <option value="Pacific/Enderbury" <?php if ($system['timezone'] == 'Pacific/Enderbury') : ?> selected <?php endif ?> >(UTC +13:00) Pacific/Enderbury</option>
                    <option value="Pacific/Fakaofo" <?php if ($system['timezone'] == 'Pacific/Fakaofo') : ?> selected <?php endif ?> >(UTC +13:00) Pacific/Fakaofo</option>
                    <option value="Pacific/Fiji" <?php if ($system['timezone'] == 'Pacific/Fiji') : ?> selected <?php endif ?> >(UTC +13:00) Pacific/Fiji</option>
                    <option value="Pacific/Chatham" <?php if ($system['timezone'] == 'Pacific/Chatham') : ?> selected <?php endif ?> >(UTC +13:45) Pacific/Chatham</option>
                    <option value="Pacific/Apia" <?php if ($system['timezone'] == 'Pacific/Apia') : ?> selected <?php endif ?> >(UTC +14:00) Pacific/Apia</option>
                    <option value="Pacific/Kiritimati" <?php if ($system['timezone'] == 'Pacific/Kiritimati') : ?> selected <?php endif ?> >(UTC +14:00) Pacific/Kiritimati</option>
                    <option value="Pacific/Tongatapu" <?php if ($system['timezone'] == 'Pacific/Tongatapu') : ?> selected <?php endif ?> >(UTC +14:00) Pacific/Tongatapu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dateformat" class="form-control-label">Date format</label>
                <select class="form-control" name="dateformat">
                    <option value="mm-dd-yyyy" <?php if ($system['dateformat'] == 'mm-dd-yyyy') : ?> selected <?php endif ?> >mm-dd-yyyy</option>
                    <option value="dd-mm-yyyy" <?php if ($system['dateformat'] == 'dd-mm-yyyy') : ?> selected <?php endif ?> >dd-mm-yyyy</option>
                    <option value="yyyy-mm-dd" <?php if ($system['dateformat'] == 'yyyy-mm-dd') : ?> selected <?php endif ?> >yyyy-mm-dd</option>
                </select>
            </div>
            <div class="form-group">
                <label for="timeformat" class="form-control-label">Time format</label>
                <select class="form-control" name="timeformat">
                    <option value="12" <?php if ($system['timeformat'] == '12') : ?> selected <?php endif ?> >12 hour (00:00 AM/PM)</option>
                    <option value="24" <?php if ($system['timeformat'] == '24') : ?> selected <?php endif ?> >24 hour (24:00)</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label">IP Restriction</label>
                <textarea class="form-control" name="iprestriction" rows="3" placeholder="Enter IP addresses, if more than one add comma after each IP address"><?= $system['iprestriction'] ?></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="1">
                <button class="btn btn-primary" id="savesystem" type="submit">Save Changes</button>
            </div>
        </div>
        </form>
    </div>    

    <div class="card p-3 my-3">
        <form action="<?= site_url('settings-update-email'); ?>" method="POST" accept-charset="UTF-8" onsubmit="saveEmail.disabled = true; return true;">
          <?= csrf_field() ?>

          <div class="col-md-6">
            <h6 class="pb-2 mb-0 mt-4">Email</h6>
            <p class="text-muted">Email SMTP settings, notifications and others related to email.</p>
            <div class="form-group">
                <label for="fromname" class="form-control-label">Sender's Name</label>
                <input type="text" name="fromname" class="form-control" value="<?= $email['fromname'] ?>">
            </div>
            <div class="form-group">
                <label for="fromemail" class="form-control-label">Sender's Email</label>
                <input type="text" name="fromemail" class="form-control" value="<?= $email['fromemail'] ?>">
            </div>
            <div class="form-group">
                <label for="protocol" class="form-control-label">Protocol</label>
                <select name="protocol" class="form-control">
                    <option value="">Select Protocol</option>
                    <option value="smtp" <?php if ($email['protocol'] == 'smtp') : ?> selected <?php endif ?> >SMTP</option>
                    <option value="sendmail" <?php if ($email['protocol'] == 'sendmail') : ?> selected <?php endif ?> >Sendmail</option>
                    <option value="phpmailer" <?php if ($email['protocol'] == 'phpmailer') : ?> selected <?php endif ?> >PHP Mailer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="host" class="form-control-label">SMTP Host</label>
                <input type="text" name="host" class="form-control" value="<?= $email['host'] ?>">
            </div>
            <div class="form-group">
                <label for="username" class="form-control-label">SMTP Username</label>
                <input type="text" name="username" class="form-control" value="<?= $email['username'] ?>">
            </div>
            <div class="form-group">
                <label for="security" class="form-control-label">SMTP Security</label>
                <select name="security" class="form-control">
                    <option value="">Select SMTP Security</option>
                    <option value="tls" <?php if ($email['security'] == 'tls') : ?> selected <?php endif ?> >TLS</option>
                    <option value="ssl" <?php if ($email['security'] == 'ssl') : ?> selected <?php endif ?> >SSL</option>
                    <option value="none" <?php if ($email['security'] == 'none') : ?> selected <?php endif ?> >None</option>
                </select>
            </div>
            <div class="form-group">
                <label for="port" class="form-control-label">SMTP Port</label>
                <input type="text" name="port" class="form-control" value="<?= $email['port'] ?>">
            </div>
            <div class="form-group">
                <label for="password" class="form-control-label">SMTP Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="1">
                <button class="btn btn-primary" id="saveEmail" type="submit">Save Changes</button>
            </div>
        </div>
        </form>
    </div> 
       
<?= $this->endSection() ?>