-- Generated by Oracle SQL Developer Data Modeler 21.4.2.059.0838
--   at:        2022-07-30 21:05:04 ICT
--   site:      Oracle Database 11g
--   type:      Oracle Database 11g



-- predefined type, no DDL - MDSYS.SDO_GEOMETRY

-- predefined type, no DDL - XMLTYPE

CREATE TABLE barangs (
    id            INTEGER NOT NULL,
    barcode       VARCHAR2(20) NOT NULL,
    nama          VARCHAR2(50) NOT NULL,
    satuan        VARCHAR2(45) NOT NULL,
    harga_beli    NUMBER NOT NULL,
    harga_jual    NUMBER NOT NULL,
    diskon        NUMBER NOT NULL,
    stock         INTEGER NOT NULL,
    nama_golongan VARCHAR2(15),
    created_at    TIMESTAMP NOT NULL,
    updated_at    TIMESTAMP
)
LOGGING;

ALTER TABLE barangs ADD CONSTRAINT barangs_pk PRIMARY KEY ( id );

CREATE TABLE customers (
    nama       VARCHAR2 
--  ERROR: VARCHAR2 size not specified 
     NOT NULL,
    status     VARCHAR2(20) NOT NULL,
    id         INTEGER NOT NULL,
    created_at TIMESTAMP NOT NULL,
    updated_at TIMESTAMP
)
LOGGING;

ALTER TABLE customers ADD CONSTRAINT customers_pk PRIMARY KEY ( id );

CREATE TABLE golongans (
    nama_golongan VARCHAR2(15) NOT NULL,
    created_at    TIMESTAMP NOT NULL,
    updated_at    TIMESTAMP
)
LOGGING;

ALTER TABLE golongans ADD CONSTRAINT golongans_pk PRIMARY KEY ( nama_golongan );

CREATE TABLE pegawais (
    id             INTEGER NOT NULL,
    nama           VARCHAR2(25) NOT NULL,
    jenis_kelamain VARCHAR2(20) NOT NULL,
    alamat         VARCHAR2(255) NOT NULL,
    no_telp        VARCHAR2(20) NOT NULL,
    pekerjaan      VARCHAR2(20) NOT NULL,
    created_at     TIMESTAMP NOT NULL,
    updated_at     TIMESTAMP
)
LOGGING;

ALTER TABLE pegawais ADD CONSTRAINT pegawais_pk PRIMARY KEY ( id );

CREATE TABLE pembelian_details (
    harga_beli NUMBER NOT NULL,
    jumlah     NUMBER NOT NULL,
    sub_total  NUMBER NOT NULL,
    faktur_id  INTEGER NOT NULL,
    created_at TIMESTAMP NOT NULL,
    updated_at TIMESTAMP,
    barang_id  INTEGER NOT NULL
)
LOGGING;

ALTER TABLE pembelian_details ADD CONSTRAINT pembelian_details_pk PRIMARY KEY ( faktur_id );

CREATE TABLE pembelians (
    id            INTEGER NOT NULL,
    tanggal_masuk DATE NOT NULL,
    total         NUMBER NOT NULL,
    pegawai_id    INTEGER NOT NULL,
    supplier_id   INTEGER NOT NULL,
    created_at    TIMESTAMP NOT NULL,
    updated_at    TIMESTAMP
)
LOGGING;

ALTER TABLE pembelians ADD CONSTRAINT pembelians_pk PRIMARY KEY ( id );

CREATE TABLE penjualan_details (
    harga_jual NUMBER NOT NULL,
    jumlah     INTEGER NOT NULL,
    sub_total  NUMBER NOT NULL,
    nota_id    INTEGER NOT NULL,
    created_at TIMESTAMP NOT NULL,
    updated_at TIMESTAMP,
    barang_id  INTEGER NOT NULL
)
LOGGING;

ALTER TABLE penjualan_details ADD CONSTRAINT penjualan_details_pk PRIMARY KEY ( nota_id );

CREATE TABLE penjualans (
    id           INTEGER NOT NULL,
    tanggal      DATE NOT NULL,
    potongan     NUMBER,
    jumlah_bayar NUMBER NOT NULL,
    pegawai_id   INTEGER NOT NULL,
    customer_id  INTEGER NOT NULL,
    created_at   TIMESTAMP NOT NULL,
    updated_at   TIMESTAMP
)
LOGGING;

ALTER TABLE penjualans ADD CONSTRAINT penjualans_pk PRIMARY KEY ( id );

CREATE TABLE retur_belis (
    id            INTEGER NOT NULL,
    tanggal_retur DATE NOT NULL,
    jumlah_retur  INTEGER NOT NULL,
    sub_total     NUMBER NOT NULL,
    created_at    TIMESTAMP NOT NULL,
    updated_at    TIMESTAMP,
    barang_id     INTEGER NOT NULL
)
LOGGING;

ALTER TABLE retur_belis ADD CONSTRAINT retur_belis_pk PRIMARY KEY ( id );

CREATE TABLE suppliers (
    id         INTEGER NOT NULL,
    nama       VARCHAR2(20) NOT NULL,
    alamat     VARCHAR2(255) NOT NULL,
    kota       VARCHAR2(20) NOT NULL,
    provinsi   VARCHAR2(20) NOT NULL,
    no_telp    VARCHAR2(20) NOT NULL,
    no_fax     VARCHAR2(20) NOT NULL,
    cp_nama    VARCHAR2(20) NOT NULL,
    cp_telp    VARCHAR2(15) NOT NULL,
    created_at TIMESTAMP NOT NULL,
    updated_at TIMESTAMP
)
LOGGING;

ALTER TABLE suppliers ADD CONSTRAINT suppliers_pk PRIMARY KEY ( id );

ALTER TABLE barangs
    ADD CONSTRAINT barangs_golongans_fk FOREIGN KEY ( nama_golongan )
        REFERENCES golongans ( nama_golongan )
    NOT DEFERRABLE;

ALTER TABLE pembelian_details
    ADD CONSTRAINT pembelian_details_barangs_fk FOREIGN KEY ( barang_id )
        REFERENCES barangs ( id )
    NOT DEFERRABLE;

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE pembelian_details
    ADD CONSTRAINT pembelian_details_pembelians_fk FOREIGN KEY ( faktur_id )
        REFERENCES pembelians ( id )
    NOT DEFERRABLE;

ALTER TABLE pembelians
    ADD CONSTRAINT pembelians_pegawais_fk FOREIGN KEY ( pegawai_id )
        REFERENCES pegawais ( id )
    NOT DEFERRABLE;

ALTER TABLE pembelians
    ADD CONSTRAINT pembelians_suppliers_fk FOREIGN KEY ( supplier_id )
        REFERENCES suppliers ( id )
    NOT DEFERRABLE;

ALTER TABLE penjualan_details
    ADD CONSTRAINT penjualan_details_barangs_fk FOREIGN KEY ( barang_id )
        REFERENCES barangs ( id )
    NOT DEFERRABLE;

--  ERROR: FK name length exceeds maximum allowed length(30) 
ALTER TABLE penjualan_details
    ADD CONSTRAINT penjualan_details_penjualans_fk FOREIGN KEY ( nota_id )
        REFERENCES penjualans ( id )
    NOT DEFERRABLE;

ALTER TABLE penjualans
    ADD CONSTRAINT penjualans_customers_fk FOREIGN KEY ( customer_id )
        REFERENCES customers ( id )
    NOT DEFERRABLE;

ALTER TABLE penjualans
    ADD CONSTRAINT penjualans_pegawais_fk FOREIGN KEY ( pegawai_id )
        REFERENCES pegawais ( id )
    NOT DEFERRABLE;

ALTER TABLE retur_belis
    ADD CONSTRAINT retur_belis_barangs_fk FOREIGN KEY ( barang_id )
        REFERENCES barangs ( id )
    NOT DEFERRABLE;



-- Oracle SQL Developer Data Modeler Summary Report: 
-- 
-- CREATE TABLE                            10
-- CREATE INDEX                             0
-- ALTER TABLE                             20
-- CREATE VIEW                              0
-- ALTER VIEW                               0
-- CREATE PACKAGE                           0
-- CREATE PACKAGE BODY                      0
-- CREATE PROCEDURE                         0
-- CREATE FUNCTION                          0
-- CREATE TRIGGER                           0
-- ALTER TRIGGER                            0
-- CREATE COLLECTION TYPE                   0
-- CREATE STRUCTURED TYPE                   0
-- CREATE STRUCTURED TYPE BODY              0
-- CREATE CLUSTER                           0
-- CREATE CONTEXT                           0
-- CREATE DATABASE                          0
-- CREATE DIMENSION                         0
-- CREATE DIRECTORY                         0
-- CREATE DISK GROUP                        0
-- CREATE ROLE                              0
-- CREATE ROLLBACK SEGMENT                  0
-- CREATE SEQUENCE                          0
-- CREATE MATERIALIZED VIEW                 0
-- CREATE MATERIALIZED VIEW LOG             0
-- CREATE SYNONYM                           0
-- CREATE TABLESPACE                        0
-- CREATE USER                              0
-- 
-- DROP TABLESPACE                          0
-- DROP DATABASE                            0
-- 
-- REDACTION POLICY                         0
-- 
-- ORDS DROP SCHEMA                         0
-- ORDS ENABLE SCHEMA                       0
-- ORDS ENABLE OBJECT                       0
-- 
-- ERRORS                                   0
-- WARNINGS                                 0
