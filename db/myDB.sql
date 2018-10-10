-- Database: d7qiohgbrcl6tn

-- DROP DATABASE d7qiohgbrcl6tn;

CREATE DATABASE d7qiohgbrcl6tn
    WITH 
    OWNER = njgytfhpucjdyk
    ENCODING = 'UTF8'
    LC_COLLATE = 'en_US.UTF-8'
    LC_CTYPE = 'en_US.UTF-8'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

GRANT ALL ON DATABASE d7qiohgbrcl6tn TO njgytfhpucjdyk;

-- CATALOG: information_schema

-- DROP SCHEMA information_schema;(

CREATE SCHEMA information_schema
    AUTHORIZATION postgres;

GRANT CREATE ON SCHEMA information_schema TO postgres;

-- CATALOG: pg_catalog

-- DROP SCHEMA pg_catalog;(

CREATE SCHEMA pg_catalog
    AUTHORIZATION postgres;

COMMENT ON SCHEMA pg_catalog
    IS 'system catalog schema';

GRANT CREATE ON SCHEMA pg_catalog TO postgres;

-- Extension: plpgsql

-- DROP EXTENSION plpgsql;

CREATE EXTENSION plpgsql
    SCHEMA pg_catalog
    VERSION "1.0";

-- Language: plpgsql

-- DROP LANGUAGE plpgsql

CREATE TRUSTED PROCEDURAL LANGUAGE plpgsql
    HANDLER plpgsql_call_handler
    INLINE plpgsql_inline_handler
    VALIDATOR plpgsql_validator;
    
ALTER LANGUAGE plpgsql
    OWNER TO postgres;

COMMENT ON LANGUAGE plpgsql
    IS 'PL/pgSQL procedural language';

REVOKE ALL ON LANGUAGE plpgsql FROM njgytfhpucjdyk;
REVOKE ALL ON LANGUAGE plpgsql FROM postgres;
REVOKE ALL ON LANGUAGE plpgsql FROM PUBLIC;

-- SCHEMA: public

-- DROP SCHEMA public ;

CREATE SCHEMA public
    AUTHORIZATION njgytfhpucjdyk;

COMMENT ON SCHEMA public
    IS 'standard public schema';

GRANT ALL ON SCHEMA public TO njgytfhpucjdyk;

GRANT ALL ON SCHEMA public TO PUBLIC;

-- SEQUENCE: public.leader_id_seq

-- DROP SEQUENCE public.leader_id_seq;

CREATE SEQUENCE public.leader_id_seq;

ALTER SEQUENCE public.leader_id_seq
    OWNER TO njgytfhpucjdyk;

-- Table: public.leader

-- DROP TABLE public.leader;

CREATE TABLE public.leader
(
    id integer NOT NULL DEFAULT nextval('leader_id_seq'::regclass),
    name character varying COLLATE pg_catalog."default" NOT NULL,
    password character varying COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT leader_pkey PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.leader
    OWNER to njgytfhpucjdyk;

-- Table: public.parent

-- DROP TABLE public.parent;

CREATE TABLE public.parent
(
    id integer NOT NULL DEFAULT nextval('parent_id_seq'::regclass),
    name character varying COLLATE pg_catalog."default" NOT NULL,
    password character varying COLLATE pg_catalog."default" NOT NULL,
    youth_id integer NOT NULL,
    CONSTRAINT parent_pkey PRIMARY KEY (id),
    CONSTRAINT youth_id FOREIGN KEY (youth_id)
        REFERENCES public.youth (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.parent
    OWNER to njgytfhpucjdyk;

-- Index: fki_youth_id

-- DROP INDEX public.fki_youth_id;

CREATE INDEX fki_youth_id
    ON public.parent USING btree
    (youth_id)
    TABLESPACE pg_default;

-- SEQUENCE: public.parent_id_seq

-- DROP SEQUENCE public.parent_id_seq;

CREATE SEQUENCE public.parent_id_seq;

ALTER SEQUENCE public.parent_id_seq
    OWNER TO njgytfhpucjdyk;

-- Table: public.quorum

-- DROP TABLE public.quorum;

CREATE TABLE public.quorum
(
    id integer NOT NULL DEFAULT nextval('quorum_id_seq'::regclass),
    name character varying COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT quorum_pkey PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.quorum
    OWNER to njgytfhpucjdyk;

-- SEQUENCE: public.quorum_id_seq

-- DROP SEQUENCE public.quorum_id_seq;

CREATE SEQUENCE public.quorum_id_seq;

ALTER SEQUENCE public.quorum_id_seq
    OWNER TO njgytfhpucjdyk;

 id integer NOT NULL DEFAULT nextval('requirements_id_seq'::regclass),
    "passedOff" boolean NOT NULL,
    comments character varying COLLATE pg_catalog."default",
    journal character varying COLLATE pg_catalog."default",
    quorum_id integer NOT NULL,
    name character varying COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT requirements_pkey PRIMARY KEY (id),
    CONSTRAINT quorum_id FOREIGN KEY (quorum_id)
        REFERENCES public.quorum (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT require_quorum_id FOREIGN KEY (quorum_id)
        REFERENCES public.quorum (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.requirements
    OWNER to njgytfhpucjdyk;

-- Index: fki_require_quorum_id

-- DROP INDEX public.fki_require_quorum_id;

CREATE INDEX fki_require_quorum_id
    ON public.requirements USING btree
    (quorum_id)
    TABLESPACE pg_default;

-- SEQUENCE: public.requirements_id_seq

-- DROP SEQUENCE public.requirements_id_seq;

CREATE SEQUENCE public.requirements_id_seq;

ALTER SEQUENCE public.requirements_id_seq
    OWNER TO njgytfhpucjdyk;

-- Table: public.youth

-- DROP TABLE public.youth;

CREATE TABLE public.youth
(
    id integer NOT NULL DEFAULT nextval('youth_id_seq'::regclass),
    name character varying COLLATE pg_catalog."default" NOT NULL,
    password character varying COLLATE pg_catalog."default" NOT NULL,
    quorum_id integer NOT NULL,
    parent_id integer,
    CONSTRAINT youth_pkey PRIMARY KEY (id),
    CONSTRAINT parent_id FOREIGN KEY (parent_id)
        REFERENCES public.parent (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT quorum_id FOREIGN KEY (quorum_id)
        REFERENCES public.quorum (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.youth
    OWNER to njgytfhpucjdyk;

-- Index: fki_parent_id

-- DROP INDEX public.fki_parent_id;

CREATE INDEX fki_parent_id
    ON public.youth USING btree
    (parent_id)
    TABLESPACE pg_default;

-- Index: fki_quorum_id

-- DROP INDEX public.fki_quorum_id;

CREATE INDEX fki_quorum_id
    ON public.youth USING btree
    (quorum_id)
    TABLESPACE pg_default;

-- SEQUENCE: public.youth_id_seq

-- DROP SEQUENCE public.youth_id_seq;

CREATE SEQUENCE public.youth_id_seq;

ALTER SEQUENCE public.youth_id_seq
    OWNER TO njgytfhpucjdyk;