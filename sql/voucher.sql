CREATE TABLE `voucher` (
`kode_voucher` varchar(20) NOT NULL,
`nama_voucher` varchar(255) NULL,
`harga_voucher` int(11) NULL,
`valid_start` datetime NULL,
`valid_end` datetime NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;