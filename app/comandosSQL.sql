
ALTER TABLE graellas ADD 
canal_id BIGINT(20) UNSIGNED;

ALTER TABLE graellas
ADD FOREIGN KEY (canal_id) REFERENCES canals(id);



ALTER TABLE graellas ADD 
programa_id BIGINT(20) UNSIGNED;

ALTER TABLE graellas
ADD FOREIGN KEY (programa_id) REFERENCES canals(id);