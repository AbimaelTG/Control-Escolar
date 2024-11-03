/* REPORTE 1 (TOP) */
SELECT
    CONCAT(NOMBRE_PROFE, CONCAT(' ',CONCAT(AP_PATER_PROFE,CONCAT(' ',AP_MATER_PROFE)))) AS PROFESOR,
    CONCAT(NOMBRE_ALUMNO,CONCAT(' ',CONCAT(AP_PATER_ALUMNO,CONCAT(' ',AP_MATER_ALUMNO)))) AS ALUMNO
FROM
    INS_ALUMNO_GRUPO
INNER JOIN  
    GRUPO
ON
    INS_ALUMNO_GRUPO.ID_GRUPO = GRUPO.ID_GRUPO    
INNER JOIN  
    PROFESOR
ON
    GRUPO.ID_PROFESOR = PROFESOR.ID_PROFESOR
INNER JOIN
    ALUMNO
ON
    INS_ALUMNO_GRUPO.ID_ALUMNO = ALUMNO.ID_ALUMNO
WHERE 
    GRADO = 4
AND
    NOM_GRUPO = 'A'
AND
    CICLO_ESCOLAR = 2020;
/* REPORTE 1 (BOTTOM) */    


/* REPORTE 2 (TOP) */
SELECT
    CONCAT(NOMBRE_PROFE, CONCAT(' ',CONCAT(AP_PATER_PROFE,CONCAT(' ',AP_MATER_PROFE)))) AS PROFESOR,
    GRADO,
    NOM_GRUPO,
    AVG(CALIFICACION)
FROM
    INS_ALUMNO_GRUPO
INNER JOIN  
    GRUPO
ON
    INS_ALUMNO_GRUPO.ID_GRUPO = GRUPO.ID_GRUPO    
INNER JOIN  
    PROFESOR
ON
    GRUPO.ID_PROFESOR = PROFESOR.ID_PROFESOR
INNER JOIN
    CALIFICACION
ON
    INS_ALUMNO_GRUPO.ID_INS_ALUMNO_GRUPO = CALIFICACION.ID_INS_ALUMNO_GRUPO
WHERE 
    CICLO_ESCOLAR = 2021
GROUP BY
    NOMBRE_PROFE,
    AP_PATER_PROFE,
    AP_MATER_PROFE,
    GRADO,
    NOM_GRUPO
ORDER BY
    GRADO,
    NOM_GRUPO     
/* REPORTE 2 (BOTTOM) */
    
/* REPORTE 3 (TOP) */
SELECT
    CONCAT(NOMBRE_ALUMNO,CONCAT(' ',CONCAT(AP_PATER_ALUMNO,CONCAT(' ',AP_MATER_ALUMNO)))) AS ALUMNO,
    GRADO,
    NOM_GRUPO,
    AVG(CALIFICACION)
FROM
    INS_ALUMNO_GRUPO
INNER JOIN  
    GRUPO
ON
    INS_ALUMNO_GRUPO.ID_GRUPO = GRUPO.ID_GRUPO  
INNER JOIN
    ALUMNO
ON
    INS_ALUMNO_GRUPO.ID_ALUMNO = ALUMNO.ID_ALUMNO
INNER JOIN
    CALIFICACION
ON
    INS_ALUMNO_GRUPO.ID_INS_ALUMNO_GRUPO = CALIFICACION.ID_INS_ALUMNO_GRUPO
WHERE 
    CICLO_ESCOLAR = 2021
GROUP BY
    NOMBRE_ALUMNO,
    AP_PATER_ALUMNO,
    AP_MATER_ALUMNO,
    GRADO,
    NOM_GRUPO
ORDER BY
    GRADO,
    NOM_GRUPO     
/* REPORTE 3 (BOTTOM) */ 

/* REPORTE 4 (TOP) */
SELECT
    GRADO,
    NOM_GRUPO,
    SUM(CASE WHEN GENERO_ALUMNO = 'F' THEN 1 ELSE 0 END) AS F,
    SUM(CASE WHEN GENERO_ALUMNO = 'M' THEN 1 ELSE 0 END) AS M
FROM
    INS_ALUMNO_GRUPO
INNER JOIN  
    GRUPO
ON
    INS_ALUMNO_GRUPO.ID_GRUPO = GRUPO.ID_GRUPO    
INNER JOIN  
    ALUMNO
ON
    INS_ALUMNO_GRUPO.ID_ALUMNO = ALUMNO.ID_ALUMNO
WHERE 
    CICLO_ESCOLAR = 2021
GROUP BY
    GRADO,
    NOM_GRUPO
ORDER BY
    GRADO,
    NOM_GRUPO    
/* REPORTE 4 (BOTTOM) */