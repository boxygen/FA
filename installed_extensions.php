<?php

/* List of installed additional extensions. If extensions are added to the list manually
	make sure they have unique and so far never used extension_ids as a keys,
	and $next_extension_id is also updated. More about format of this file yo will find in
	FA extension system documentation.
*/

$next_extension_id = 123; // unique id for next installed extension

$installed_extensions = array (
  1 => 
  array (
    'name' => 'Theme Dynamic',
    'package' => 'dynamic',
    'version' => '2.4.0-2',
    'type' => 'theme',
    'active' => false,
    'path' => 'themes/dynamic',
  ),
  2 => 
  array (
    'package' => 'bulk_deposit',
    'name' => 'bulk_deposit',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/bulk_deposit',
    'active' => false,
  ),
  3 => 
  array (
    'package' => 'cash_vouchers',
    'name' => 'cash_vouchers',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/cash_vouchers',
    'active' => false,
  ),
  6 => 
  array (
    'package' => 'inv_convert',
    'name' => 'inv_convert',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/inv_convert',
    'active' => false,
  ),
  7 => 
  array (
    'package' => 'masjid',
    'name' => 'masjid',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/masjid',
    'active' => false,
  ),
  9 => 
  array (
    'package' => 'rep_bank_statement_full_memo',
    'name' => 'rep_bank_statement_full_memo',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/rep_bank_statement_full_memo',
    'active' => false,
  ),
  10 => 
  array (
    'package' => 'rep_cogs_reconcile',
    'name' => 'rep_cogs_reconcile',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/rep_cogs_reconcile',
    'active' => false,
  ),
  11 => 
  array (
    'package' => 'rep_customer_ledger',
    'name' => 'rep_customer_ledger',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/rep_customer_ledger',
    'active' => false,
  ),
  12 => 
  array (
    'package' => 'rep_gl_ledger_full_memo',
    'name' => 'rep_gl_ledger_full_memo',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/rep_gl_ledger_full_memo',
    'active' => false,
  ),
  13 => 
  array (
    'name' => 'Bank Statement w/ Reconcile',
    'package' => 'rep_statement_reconcile',
    'version' => '2.4.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_statement_reconcile',
  ),
  14 => 
  array (
    'package' => 'rep_salesman_sales',
    'name' => 'rep_salesman_sales',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/rep_salesman_sales',
    'active' => false,
  ),
  15 => 
  array (
    'package' => 'rep_supplier_ledger',
    'name' => 'rep_supplier_ledger',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/rep_supplier_ledger',
    'active' => false,
  ),
  16 => 
  array (
    'package' => 'shipping_invoice',
    'name' => 'shipping_invoice',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/shipping_invoice',
    'active' => false,
  ),
  17 => 
  array (
    'package' => 'tiles_invoice',
    'name' => 'tiles_invoice',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/tiles_invoice',
    'active' => false,
  ),
  18 => 
  array (
    'package' => 'water_invoice',
    'name' => 'water_invoice',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/water_invoice',
    'active' => false,
  ),
  19 => 
  array (
    'package' => 'scheme',
    'name' => 'scheme',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/scheme',
    'active' => false,
  ),
  20 => 
  array (
    'package' => 'stock_adjustment',
    'name' => 'stock_adjustment',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/stock_adjustment',
    'active' => false,
  ),
  21 => 
  array (
    'package' => 'FrontHrm',
    'name' => 'FrontHrm',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/FrontHrm',
    'active' => false,
  ),
  22 => 
  array (
    'package' => 'sgw_sales',
    'name' => 'sgw_sales',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/sgw_sales',
    'active' => false,
  ),
  24 => 
  array (
    'package' => 'cust_inquiry',
    'name' => 'cust_inquiry',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/cust_inquiry',
    'active' => false,
  ),
  25 => 
  array (
    'package' => 'items_with_brands',
    'name' => 'items_with_brands',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/items_with_brands',
    'active' => false,
  ),
  27 => 
  array (
    'package' => 'rep_salesman_aging',
    'name' => 'rep_salesman_aging',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/rep_salesman_aging',
    'active' => false,
  ),
  28 => 
  array (
    'package' => 'school',
    'name' => 'school',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/school',
    'active' => false,
  ),
  29 => 
  array (
    'package' => 'mail',
    'name' => 'mail',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/mail',
    'active' => false,
  ),
  30 => 
  array (
    'package' => 'forwarding',
    'name' => 'forwarding',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/forwarding',
    'active' => false,
  ),
  31 => 
  array (
    'package' => 'editable',
    'name' => 'editable',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/editable',
    'active' => false,
  ),
  32 => 
  array (
    'package' => 'ERDC',
    'name' => 'ERDC',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/ERDC',
    'active' => false,
  ),
  34 => 
  array (
    'package' => 'zqagency',
    'name' => 'zqagency',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/zqagency',
    'active' => false,
  ),
  35 => 
  array (
    'package' => 'saadtraders',
    'name' => 'saadtraders',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/saadtraders',
    'active' => false,
  ),
  36 => 
  array (
    'package' => 'kanban',
    'name' => 'kanban',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/kanban',
    'active' => false,
  ),
  38 => 
  array (
    'package' => 'pos',
    'name' => 'POS',
    'version' => '2.4.0-3',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/pos',
    'active' => false,
  ),
  39 => 
  array (
    'package' => 'cash_rec',
    'name' => 'cash_rec',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/cash_rec',
    'active' => false,
  ),
  41 => 
  array (
    'name' => 'Dated Stock Sheet',
    'package' => 'rep_dated_stock',
    'version' => '2.4.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_dated_stock',
  ),
  42 => 
  array (
    'package' => 'supp_disc',
    'name' => 'supp_disc',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/supp_disc',
    'active' => false,
  ),
  45 => 
  array (
    'package' => 'AFOHS',
    'name' => 'AFOHS',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/AFOHS',
    'active' => false,
  ),
  46 => 
  array (
    'name' => 'Import Multiple Journal Entries',
    'package' => 'import_multijournalentries',
    'version' => '2.4.0-3',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/import_multijournalentries',
  ),
  47 => 
  array (
    'package' => 'fa_dropbox',
    'name' => 'fa_dropbox',
    'version' => '2.4.0-3',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/fa_dropbox',
    'active' => false,
  ),
  48 => 
  array (
    'package' => 'paktax',
    'name' => 'paktax',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/paktax',
    'active' => false,
  ),
  49 => 
  array (
    'name' => 'Auth_LDAP',
    'package' => 'auth_ldap',
    'version' => '2.4.0-3',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/auth_ldap',
  ),
  50 => 
  array (
    'name' => 'Import Paypal transactions',
    'package' => 'import_paypal',
    'version' => '2.4.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/import_paypal',
  ),
  51 => 
  array (
    'package' => 'bx_import_items',
    'name' => 'bx_import_items',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/bx_import_items',
    'active' => false,
  ),
  52 => 
  array (
    'package' => 'maclhr',
    'name' => 'maclhr',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/maclhr',
    'active' => false,
  ),
  54 => 
  array (
    'name' => 'Cash Flow Statement Report',
    'package' => 'rep_cash_flow_statement',
    'version' => '2.4.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_cash_flow_statement',
  ),
  56 => 
  array (
    'package' => 'equator',
    'name' => 'equator',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/equator',
    'active' => false,
  ),
  57 => 
  array (
    'package' => 'cotpak',
    'name' => 'cotpak',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/cotpak',
    'active' => false,
  ),
  59 => 
  array (
    'package' => 'resellers',
    'name' => 'resellers',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/resellers',
    'active' => false,
  ),
  60 => 
  array (
    'package' => 'transport',
    'name' => 'transport',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/transport',
    'active' => false,
  ),
  62 => 
  array (
    'package' => 'advance_manuf',
    'name' => 'advance_manuf',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/advance_manuf',
    'active' => false,
  ),
  63 => 
  array (
    'name' => 'Report Generator',
    'package' => 'repgen',
    'version' => '2.4.0-4',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/repgen',
  ),
  64 => 
  array (
    'package' => 'gatepass',
    'name' => 'gatepass',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/gatepass',
    'active' => false,
  ),
  65 => 
  array (
    'package' => 'quickreport',
    'name' => 'Quick Report',
    'version' => '2.4.0-2',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/quickreport',
    'active' => false,
  ),
  66 => 
  array (
    'package' => 'bank_auto_reconcile',
    'name' => 'bank_auto_reconcile',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/bank_auto_reconcile',
    'active' => false,
  ),
  67 => 
  array (
    'package' => 'jewellers',
    'name' => 'Jewellers',
    'version' => '2.4.0-3',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/jewellers',
    'active' => false,
  ),
  68 => 
  array (
    'package' => 'value_add',
    'name' => 'value_add',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/value_add',
    'active' => false,
  ),
  70 => 
  array (
    'package' => 'gd_items',
    'name' => 'gd_items',
    'version' => '2.4.0-3',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/gd_items',
    'active' => false,
  ),
  71 => 
  array (
    'package' => 'container',
    'name' => 'container',
    'version' => '2.4.0-3',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/container',
    'active' => false,
  ),
  73 => 
  array (
    'package' => 'guardian',
    'name' => 'guardian',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/guardian',
    'active' => false,
  ),
  74 => 
  array (
    'package' => 'export_docs',
    'name' => 'export_docs',
    'version' => '2.4.0-3',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/export_docs',
    'active' => false,
  ),
  76 => 
  array (
    'package' => 'clearing',
    'name' => 'clearing',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/clearing',
    'active' => false,
  ),
  77 => 
  array (
    'package' => 'jodiabazar',
    'name' => 'jodiabazar',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/jodiabazar',
    'active' => false,
  ),
  81 => 
  array (
    'package' => 'multi_loc',
    'name' => 'multi_loc',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/multi_loc',
    'active' => false,
  ),
  82 => 
  array (
    'package' => 'unit_conversion',
    'name' => 'unit_conversion',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/unit_conversion',
    'active' => false,
  ),
  85 => 
  array (
    'package' => 'inv_item',
    'name' => 'inv_item',
    'version' => '2.4.0-3',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/inv_item',
    'active' => false,
  ),
  86 => 
  array (
    'package' => 'pdcs',
    'name' => 'pdcs',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/pdcs',
    'active' => false,
  ),
  90 => 
  array (
    'package' => 'halal_cert',
    'name' => 'halal_cert',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/halal_cert',
    'active' => false,
  ),
  91 => 
  array (
    'package' => 'eif',
    'name' => 'eif',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/eif',
    'active' => false,
  ),
  92 => 
  array (
    'package' => 'clearingv2',
    'name' => 'clearingv2',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/clearingv2',
    'active' => false,
  ),
  93 => 
  array (
    'package' => 'basic',
    'name' => 'basic',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/basic',
    'active' => false,
  ),
  94 => 
  array (
    'package' => 'posph',
    'name' => 'POS by Phuong',
    'version' => '2.4.0-3',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/posph',
    'active' => false,
  ),
  95 => 
  array (
    'package' => 'auto_recurring_invoice',
    'name' => 'auto_recurring_invoice',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/auto_recurring_invoice',
    'active' => false,
  ),
  96 => 
  array (
    'package' => 'schoolv2',
    'name' => 'schoolv2',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/schoolv2',
    'active' => false,
  ),
  97 => 
  array (
    'package' => 'cron',
    'name' => 'cron',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/cron',
    'active' => false,
  ),
  98 => 
  array (
    'package' => 'sms',
    'name' => 'sms',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/sms',
    'active' => false,
  ),
  100 => 
  array (
    'package' => 'ExtendedHRM',
    'name' => 'ExtendedHRM',
    'version' => '2.4',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/ExtendedHRM',
    'active' => false,
  ),
  101 => 
  array (
    'package' => 'party_ledger',
    'name' => 'party_ledger',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/party_ledger',
    'active' => false,
  ),
  102 => 
  array (
    'package' => 'comm_server',
    'name' => 'comm_server',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/comm_server',
    'active' => false,
  ),
  103 => 
  array (
    'package' => 'comm',
    'name' => 'comm',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/comm',
    'active' => false,
  ),
  104 => 
  array (
    'package' => 'water_mod',
    'name' => 'water_mod',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/water_mod',
    'active' => false,
  ),
  106 => 
  array (
    'package' => 'containerv2',
    'name' => 'containerv2',
    'version' => '2.4.0-3',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/containerv2',
    'active' => false,
  ),
  107 => 
  array (
    'package' => 'installment',
    'name' => 'installment',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/installment',
    'active' => false,
  ),
  108 => 
  array (
    'package' => 'cable_sys',
    'name' => 'cable_sys',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/cable_sys',
    'active' => false,
  ),
  109 => 
  array (
    'package' => 'abidnco',
    'name' => 'abidnco',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/abidnco',
    'active' => false,
  ),
  110 => 
  array (
    'package' => 'mpos',
    'name' => 'MPOS',
    'version' => '2.4.0-4',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/mpos',
    'active' => false,
  ),
  111 => 
  array (
    'package' => 'gym',
    'name' => 'gym',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/gym',
    'active' => false,
  ),
  112 => 
  array (
    'package' => 'single_voucher',
    'name' => 'single_voucher',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/single_voucher',
    'active' => false,
  ),
  113 => 
  array (
    'package' => 'bx_import_customers',
    'name' => 'bx_import_customers',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/bx_import_customers',
    'active' => false,
  ),
  114 => 
  array (
    'package' => 'batchexp',
    'name' => 'batchexp',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/batchexp',
    'active' => false,
  ),
  115 => 
  array (
    'package' => 'additional_fields',
    'name' => 'additional_fields',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/additional_fields',
    'active' => false,
  ),
  116 => 
  array (
    'package' => 'inv_item2',
    'name' => 'inv_item2',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/inv_item2',
    'active' => false,
  ),
  117 => 
  array (
    'package' => 'inv_item3',
    'name' => 'inv_item3',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/inv_item3',
    'active' => false,
  ),
  118 => 
  array (
    'package' => 'item_attributes',
    'name' => 'item_attributes',
    'version' => '2.4.0-3',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/item_attributes',
    'active' => false,
  ),
  119 => 
  array (
    'package' => 'rholab',
    'name' => 'rholab',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/rholab',
    'active' => false,
  ),
  120 => 
  array (
    'package' => 'cng',
    'name' => 'cng',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/cng',
    'active' => false,
  ),
  121 => 
  array (
    'package' => 'mtclearing',
    'name' => 'mtclearing',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/mtclearing',
    'active' => false,
  ),
  122 => 
  array (
    'package' => 'pay_extras',
    'name' => 'pay_extras',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/pay_extras',
    'active' => false,
  ),
);
