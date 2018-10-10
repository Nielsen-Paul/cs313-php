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

-- SEQUENCE: public.parent_id_seq

-- DROP SEQUENCE public.parent_id_seq;

CREATE SEQUENCE public.parent_id_seq;

ALTER SEQUENCE public.parent_id_seq
    OWNER TO njgytfhpucjdyk;

-- SEQUENCE: public.quorum_id_seq

-- DROP SEQUENCE public.quorum_id_seq;

CREATE SEQUENCE public.quorum_id_seq;

ALTER SEQUENCE public.quorum_id_seq
    OWNER TO njgytfhpucjdyk;

-- SEQUENCE: public.requirements_id_seq

-- DROP SEQUENCE public.requirements_id_seq;

CREATE SEQUENCE public.requirements_id_seq;

ALTER SEQUENCE public.requirements_id_seq
    OWNER TO njgytfhpucjdyk;

-- SEQUENCE: public.youth_id_seq

-- DROP SEQUENCE public.youth_id_seq;

CREATE SEQUENCE public.youth_id_seq;

ALTER SEQUENCE public.youth_id_seq
    OWNER TO njgytfhpucjdyk;