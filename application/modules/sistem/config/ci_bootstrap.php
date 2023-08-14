<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

	// Site name
	'site_name' => 'Sukadaya Group',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> 'Danang Widhi Nugroho',
		'description'	=> 'Website POS untuk Sukadaya Motor',
		'keywords'		=> 'POS, Sukadaya'
	),
	
	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
			'assets/dist/admin/adminlte.min.js',
			'assets/dist/admin/lib.min.js',
			'assets/dist/admin/app.min.js',
			'assets/uploads/jquery-ui-1.12.1/jquery-ui.min.js'			
		),
		'foot'	=> array(
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/admin/adminlte.min.css',
			'assets/dist/admin/lib.min.css',
			'assets/dist/admin/app.min.css',
			'assets/uploads/jquery-ui-1.12.1/jquery-ui.min.css'
		)
	),

	// Default CSS class for <body> tag
	'body_class' => '',
	
	// Multilingual settings
	'languages' => array(
	),

	// Menu items
	'menu' => array(
		'home' => array(
			'name'		=> 'Home',
			'url'		=> '',
			'icon'		=> 'fa fa-home',
		),
		'masterdata' => array(
			'name'		=> 'Master Data',
			'url'		=> 'masterdata',
			'icon'		=> 'fa fa-database',
			'children' => array(
				'Data Barang' => array(
					'url' => 'databarang',
					'icon' => 'fa fa-cube',
					'children' => array( // Level menu ke-3 di sini
						'Barang Dan Jasa' => array(
							'url' => 'master/produk',
							'icon' => 'fa fa-barcode' // Ikon untuk sub-submenu "Sub List 1"
						),
						'Kategori' => array(
							'url' => 'master/kategori',
							'icon' => 'fa fa-th-list' // Ikon untuk sub-submenu "Sub List 1"
						),					
						'Merek' => array(
							'url' => 'master/merek',
							'icon' => 'fa fa-tag' // Ikon untuk sub-submenu "Sub List 1"
						),
						'Golongan' => array(
							'url' => 'master/golongan',
							'icon' => 'fa fa-sitemap' // Ikon untuk sub-submenu "Sub List 1"
						),
					),
				),	
				'Data Transaksi' => array(
					'url' => 'datatransaksi',
					'icon' => 'fa fa-exchange',
					'children' => array( // Level menu ke-3 di sini
						'Supplier' => array(
							'url' => 'master/supplier',
							'icon' => 'fa fa-truck' // Ikon untuk sub-submenu "Sub List 1"
						),
						'Customer' => array(
							'url' => 'master/customer',
							'icon' => 'fa fa-users' // Ikon untuk sub-submenu "Sub List 1"
						),					
						'Jenis Pembayaran' => array(
							'url' => 'master/jenis_bayar',
							'icon' => 'fa fa-credit-card' // Ikon untuk sub-submenu "Sub List 1"
						),
					),
				),			
				'Data Pengguna' => array(
					'url' => 'datapengguna',
					'icon' => 'fa fa-users',
					'children' => array( // Level menu ke-3 di sini
						'User Account' => array(
							'url' => 'panel/admin_user',
							'icon' => 'fa fa-user-circle' // Ikon untuk sub-submenu "Sub List 1"
						),
						'Karyawan' => array(
							'url' => 'master/karyawan',
							'icon' => 'fa fa-briefcase' // Ikon untuk sub-submenu "Sub List 1"
						),					
					),		
				),	
				'Data Lokasi' => array(
					'url' => 'datalokasi',
					'icon' => 'fa fa-street-view',
					'children' => array( // Level menu ke-3 di sini
						'Toko & Gudang' => array(
							'url' => 'master/lokasi',
							'icon' => 'fa fa-building' // Ikon untuk sub-submenu "Sub List 1"
						),
						'Area Kirim' => array(
							'url' => 'master/area_kirim',
							'icon' => 'fa fa-map-marker' // Ikon untuk sub-submenu "Sub List 1"
						),					
					),
				),
				'Kendaraan' => array(
					'url' => 'master/Kendaraan',
					'icon' => 'fa fa-car'
				),
				'Bank' => array(
					'url' => 'master/bank',
					'icon' => 'fa fa-university'
				),
				'Akun Pembukuan' => array(
					'url' => 'master/akun_pembukuan',
					'icon' => 'fa fa-book'
				),
			),
		),
		'proses' => array(
			'name'		=> 'Proses',
			'url'		=> 'proses',
			'icon'		=> 'fa fa-exchange',
			'children' => array(
				'Pembelian' => array(
	'url' => 'pembelian',
	'icon' => 'fa fa-shopping-cart', // Ikon untuk menu "Pembelian"
	'children' => array(
		'Purchase Order' => array(
			'url' => 'proses/po',
			'icon' => 'fa fa-file-text-o' // Ikon untuk sub-submenu "Purchase Order"
		),
		'Pembelian' => array(
			'url' => 'proses/pembelian',
			'icon' => 'fa fa-money' // Ikon untuk sub-submenu "Pembelian"
		),					
		'Retur Pembelian' => array(
			'url' => 'proses/retur_pembelian',
			'icon' => 'fa fa-undo' // Ikon untuk sub-submenu "Retur Pembelian"
		),
		'Uang Muka Beli' => array(
			'url' => 'proses/uang_muka_beli',
			'icon' => 'fa fa-dollar' // Ikon untuk sub-submenu "Uang Muka Beli"
		),
	),
),
	'Penjualan' => array(
	'url' => 'penjualan',
	'icon' => 'fa fa-shopping-bag', // Ikon untuk menu "Penjualan"
	'children' => array(
		'Penjualan' => array(
			'url' => 'proses/penjualan',
			'icon' => 'fa fa-money' // Ikon untuk sub-submenu "Penjualan"
		),
		'Retur Penjualan' => array(
			'url' => 'proses/retur_penjualan',
			'icon' => 'fa fa-undo' // Ikon untuk sub-submenu "Retur Penjualan"
		),					
		'Uang Muka Jual' => array(
			'url' => 'proses/uang_muka_jual',
			'icon' => 'fa fa-dollar' // Ikon untuk sub-submenu "Uang Muka Jual"
		),
		'Sales Order' => array(
			'url' => 'proses/sales_order',
			'icon' => 'fa fa-file-text-o' // Ikon untuk sub-submenu "Sales Order"
		),
		'Mekanik Order' => array(
			'url' => 'proses/mekanik_order',
			'icon' => 'fa fa-wrench' // Ikon untuk sub-submenu "Mekanik Order"
		),
		'Pengiriman' => array(
			'url' => 'proses/pengiriman',
			'icon' => 'fa fa-truck' // Ikon untuk sub-submenu "Pengiriman"
		),
	),
),
			
				'Konsinyasi' => array(
	'url' => 'konsinyasi',
	'icon' => 'fa fa-handshake-o', // Ikon untuk menu "Konsinyasi"
	'children' => array(
		'Input Retur' => array(
			'url' => 'proses/konsinyasi/input_retur',
			'icon' => 'fa fa-reply' // Ikon untuk sub-submenu "Input Retur"
		),
		'Daftar' => array(
			'url' => 'proses/konsinyasi/daftar',
			'icon' => 'fa fa-list-ul' // Ikon untuk sub-submenu "Daftar"
		),					
	),
),
	
				'Mutasi Kas' => array(
	'url' => 'proses/mutasi_kas',
	'icon' => 'fa fa-exchange' // Ikon untuk menu "Mutasi Kas"
),
'Bayar Utang' => array(
	'url' => 'proses/bayar_utang',
	'icon' => 'fa fa-credit-card' // Ikon untuk menu "Bayar Utang"
),
'Bayar Piutang' => array(
	'url' => 'proses/bayar_piutang',
	'icon' => 'fa fa-money' // Ikon untuk menu "Bayar Piutang"
),
'Reedeem Point' => array(
	'url' => 'proses/reedem_point',
	'icon' => 'fa fa-gift' // Ikon untuk menu "Reedeem Point"
),
'Promo' => array(
	'url' => 'proses/promo',
	'icon' => 'fa fa-percent' // Ikon untuk menu "Promo"
),

				'Inventaris' => array(
	'url' => 'inventaris',
	'icon' => 'fa fa-archive', // Ikon untuk menu "Inventaris"
	'children' => array(
		'Stok Opname' => array(
			'url' => 'proses/stok_opname',
			'icon' => 'fa fa-tasks' // Ikon untuk sub-submenu "Stok Opname"
		),
		'Gudang Order' => array(
			'url' => 'proses/gudang_order',
			'icon' => 'fa fa-building-o' // Ikon untuk sub-submenu "Gudang Order"
		),
		'Request Order' => array(
			'url' => 'proses/request_order',
			'icon' => 'fa fa-paper-plane-o' // Ikon untuk sub-submenu "Request Order"
		),
		'Prive(Pemakaian Sendiri)' => array(
			'url' => 'proses/prive',
			'icon' => 'fa fa-user-secret' // Ikon untuk sub-submenu "Prive (Pemakaian Sendiri)"
		),
		'Aktiva' => array(
			'url' => 'proses/aktiva',
			'icon' => 'fa fa-briefcase' // Ikon untuk sub-submenu "Aktiva"
		),
	),
),

			),
		),
		'laporan' => array(
	'name' => 'Laporan',
	'url' => 'laporan',
	'icon' => 'fa fa-file-text-o', // Ikon untuk menu "Laporan"
	'children' => array(
		'Laporan Penjualan' => array(
			'url' => 'laporan/penjualan',
			'icon' => 'fa fa-line-chart' // Ikon untuk "Laporan Penjualan"
		),
		'Laporan Pembelian' => array(
			'url' => 'laporan/Pembelian',
			'icon' => 'fa fa-shopping-basket' // Ikon untuk "Laporan Pembelian"
		),
		'Laporan Rugi Laba' => array(
			'url' => 'laporan/rugi_laba',
			'icon' => 'fa fa-bar-chart' // Ikon untuk "Laporan Rugi Laba"
		),
		'Laporan Stok' => array(
			'url' => 'laporan/stok',
			'icon' => 'fa fa-cubes' // Ikon untuk "Laporan Stok"
		),
		'Laporan Keuangan' => array(
			'url' => 'laporan/keuangan',
			'icon' => 'fa fa-money' // Ikon untuk "Laporan Keuangan"
		),
		'Laporan Utang' => array(
			'url' => 'laporan/utang',
			'icon' => 'fa fa-credit-card' // Ikon untuk "Laporan Utang"
		),
		'Laporan Piutang' => array(
			'url' => 'laporan/piutang',
			'icon' => 'fa fa-dollar' // Ikon untuk "Laporan Piutang"
		),
		'Laporan Bilyet Giro(BG)' => array(
			'url' => 'laporan/bg',
			'icon' => 'fa fa-file-o' // Ikon untuk "Laporan Bilyet Giro(BG)"
		),
		'Laporan Tahunan' => array(
			'url' => 'laporan/tahunan',
			'icon' => 'fa fa-calendar' // Ikon untuk "Laporan Tahunan"
		),
		'Laporan Modal' => array(
			'url' => 'laporan/modal',
			'icon' => 'fa fa-bank' // Ikon untuk "Laporan Modal"
		),
		'Laporan Lain-lain' => array(
			'url' => 'laporan/lainnya',
			'icon' => 'fa fa-ellipsis-h' // Ikon untuk "Laporan Lain-lain"
		),
	),
),
'pengaturan' => array(
	'name' => 'Pengaturan',
	'url' => 'pengaturan',
	'icon' => 'fa fa-cogs', // Ikon untuk menu "Pengaturan"
	'children' => array(
		'Setting Printer' => array(
			'url' => 'pengaturan/printer',
			'icon' => 'fa fa-print' // Ikon untuk "Setting Printer"
		),
		'Setting Tutup Buku' => array(
			'url' => 'pengaturan/tutup_buku',
			'icon' => 'fa fa-book' // Ikon untuk "Setting Tutup Buku"
		),
		'Setting Nota' => array(
			'url' => 'pengaturan/nota',
			'icon' => 'fa fa-file-text-o' // Ikon untuk "Setting Nota"
		),
		'Setting Database' => array(
			'url' => 'pengaturan/database',
			'icon' => 'fa fa-database' // Ikon untuk "Setting Database"
		),
		'Setting Backup Database' => array(
			'url' => 'pengaturan/database/backup',
			'icon' => 'fa fa-hdd-o' // Ikon untuk "Setting Backup Database"
		),
		'Setting Import Database' => array(
			'url' => 'pengaturan/database/import',
			'icon' => 'fa fa-upload' // Ikon untuk "Setting Import Database"
		),
		'Setting Modal' => array(
			'url' => 'pengaturan/modal',
			'icon' => 'fa fa-money' // Ikon untuk "Setting Modal"
		),
		'Setting Nota & Invoice Design' => array(
			'url' => 'pengaturan/nota/design',
			'icon' => 'fa fa-pencil-square-o' // Ikon untuk "Setting Nota & Invoice Design"
		),
	),
),

		'logout' => array(
			'name'		=> 'Sign Out',
			'url'		=> 'panel/logout',
			'icon'		=> 'fa fa-sign-out',
		)
	),

	// Login page
	'login_url' => 'sistem/login',

	// Restricted pages
	'page_auth' => array(
		'user/create'				=> array('webmaster', 'admin', 'manager'),
		'user/group'				=> array('webmaster', 'admin', 'manager'),
		'panel'						=> array('webmaster'),
		'panel/admin_user'			=> array('webmaster'),
		'panel/admin_user_create'	=> array('webmaster'),
		'panel/admin_user_group'	=> array('webmaster'),
		'util'						=> array('webmaster'),
		'util/list_db'				=> array('webmaster'),
		'util/backup_db'			=> array('webmaster'),
		'util/restore_db'			=> array('webmaster'),
		'util/remove_db'			=> array('webmaster'),
	),

	// AdminLTE settings
	'adminlte' => array(
		'body_class' => array(
			'webmaster'	=> 'skin-blue',
			'admin'		=> 'skin-purple',
			'manager'	=> 'skin-black',
			'staff'		=> 'skin-red',
		)
	),

	// Useful links to display at bottom of sidemenu
	'useful_links' => array(
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Jadwal Developer',
			'url'		=> 'sistem/Jadwal',
			'target'	=> '_self',
			'color'		=> 'text-aqua'
		),
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Bantuan Developer',
			'url'		=> 'https://wa.link/srzs9t',
			'target'	=> '_blank',
			'color'		=> 'text-orange'
		),
	),

	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_admin_sukadaya';