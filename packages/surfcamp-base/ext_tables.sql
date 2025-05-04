#
# Table definition for "tx_surfcampbase_domain_model_weatherdata"
#
CREATE TABLE tx_surfcampbase_domain_model_weatherdata (
    humidity float DEFAULT '0' NOT NULL,
    temp float DEFAULT '0' NOT NULL,
    alarm TINYINT(1) DEFAULT '0' NOT NULL,
    brightness float DEFAULT '0' NOT NULL,
);

