



CREATE SEQUENCE alumno_sequence;
CREATE SEQUENCE calificacion_sequence;
CREATE SEQUENCE evaluacion_sequence;
CREATE SEQUENCE grupo_sequence;
CREATE SEQUENCE ins_alumno_grupo_sequence;
CREATE SEQUENCE profesor_sequence;
CREATE SEQUENCE materia_sequence;

CREATE OR REPLACE TRIGGER alumno_on_insert
  BEFORE INSERT ON alumno
  FOR EACH ROW
BEGIN
  SELECT alumno_sequence.nextval
  INTO :new.id_alumno
  FROM dual;
END;

CREATE OR REPLACE TRIGGER calificacion_sequence
  BEFORE INSERT ON calificacion
  FOR EACH ROW
BEGIN
  SELECT calificacion_sequence.nextval
  INTO :new.id_calificacion
  FROM dual;
END;


CREATE OR REPLACE TRIGGER evaluacion_sequence
  BEFORE INSERT ON evaluacion
  FOR EACH ROW
BEGIN
  SELECT evaluacion_sequence.nextval
  INTO :new.id_evaluacion
  FROM dual;
END;

CREATE OR REPLACE TRIGGER grupo_sequence
  BEFORE INSERT ON grupo
  FOR EACH ROW
BEGIN
  SELECT grupo_sequence.nextval
  INTO :new.id_grupo
  FROM dual;
END;

CREATE OR REPLACE TRIGGER ins_alumno_grupo_sequence
  BEFORE INSERT ON ins_alumno_grupo
  FOR EACH ROW
BEGIN
  SELECT ins_alumno_grupo_sequence.nextval
  INTO :new.id_ins_alumno_grupo
  FROM dual;
END;

CREATE OR REPLACE TRIGGER profesor_sequence
  BEFORE INSERT ON profesor
  FOR EACH ROW
BEGIN
  SELECT profesor_sequence.nextval
  INTO :new.id_profesor
  FROM dual;
END;

CREATE OR REPLACE TRIGGER materia_sequence
  BEFORE INSERT ON materia
  FOR EACH ROW
BEGIN
  SELECT materia_sequence.nextval
  INTO :new.id_materia
  FROM dual;
END;
