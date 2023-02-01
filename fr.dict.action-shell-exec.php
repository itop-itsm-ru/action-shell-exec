<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2016 Vladimir Kunin <v.b.kunin@gmail.com>
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('FR FR', 'French', 'French', array(

    'Class:ActionShellExec' => 'Execution de script',
    'Class:ActionShellExec+' => 'Execution d\'un script shell',
    'Class:ActionShellExec/Attribute:script_path' => 'Chemin',
    'Class:ActionShellExec/Attribute:script_path+' => 'Chemin complet vers le script',
    'Class:ActionShellExec/Attribute:script_path?' => 'Vérifier que les droits sur le script lui permettent d\'être exécuté !',
    'Class:ActionShellExec/Attribute:params' => 'Paramètres',
    'Class:ActionShellExec/Attribute:params+' => 'Paramètres passés au script, un par ligne',
    'Class:ActionShellExec/Attribute:params?' => "Exemples (comment le définir dans l\'action iTop => comment le récupérer dans le script) :
    \$this->name\$ => \$THIS_NAME
    \$this->caller_id->org_id\$ => \$THIS_CALLER_ID_ORG_ID
    START = \$this->start_date\$ => \$START
    DESC = \$this->html(description)\$ => \$DESC
    YOUR_ENV_VAR = \$this->attcode\$ => \$YOUR_ENV_VAR",

    'Class:EventNotificationShellExec' => 'Notifications des executions de script',
    'Class:EventNotificationShellExec+' => 'Notifications des executions de script',
    'Class:EventNotificationShellExec/Attribute:log' => 'Journal',
    'Class:EventNotificationShellExec/Attribute:log+' => 'Journal',
));

