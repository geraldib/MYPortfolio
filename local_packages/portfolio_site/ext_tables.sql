#
# Add SQL definition of database tables
#
CREATE TABLE tt_content (
    -- Pokemon Element Fields
    hero_slider_title VARCHAR(255) DEFAULT '0' NOT NULL,
    hero_slider_subtitle VARCHAR(255) DEFAULT '0' NOT NULL,
    hero_slider_image int(11) unsigned DEFAULT '0' NOT NULL,
);
              

CREATE TABLE tx_portfoliosite_domain_model_project (
    uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    
    name varchar(255) DEFAULT '' NOT NULL,
    description text NOT NULL,
    image int(11) unsigned DEFAULT '0' NOT NULL,
    
    PRIMARY KEY (uid),
    KEY parent (pid)
);