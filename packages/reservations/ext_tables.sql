#
# Table definition for "tx_reservations_domain_model_reservation"
#
CREATE TABLE tx_reservations_domain_model_reservation (
    first_name        varchar(255) DEFAULT '' NOT NULL,
    last_name         varchar(255) DEFAULT '' NOT NULL,
    number_of_persons int          DEFAULT 0  NOT NULL,
    telephone         varchar(255) DEFAULT '' NOT NULL,
    email             varchar(255) DEFAULT '' NOT NULL,
    reservation_time  datetime                NOT NULL
);
