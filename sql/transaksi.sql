CREATE TABLE `transaksi` (
`no_transaksi` varchar(16) NOT NULL,
`nominal` double NULL,
`date` datetime NULL,
`cif` varchar(10) NULL,
`kode_jenistrx` varchar(10) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;