<?php
declare(strict_types=1);

// Expert Witness Reports
$reports = [
    [
        'name' => 'Perito de humedades',
        'category' => Category::REPORT,
        'subcategory' => ReportCategory::DAMAGE,
        'description' => 'Analizamos humedades, filtraciones y patologías asociadas para identificar su causa real y aportar una base técnica sólida en reclamaciones, reparaciones o conflictos.',
        'text' => '<p>El servicio de <strong>perito de humedades</strong> está orientado a diagnosticar el <strong>origen real de humedades, filtraciones, condensaciones</strong> y daños asociados en viviendas, locales, edificios o naves. Muchas patologías se confunden entre sí, y actuar sin un <strong>diagnóstico técnico adecuado</strong> puede llevar a reparaciones ineficaces o a reclamaciones mal planteadas.</p><p>En ' . COMPANY_BRAND . ' realizamos la <strong>inspección técnica del inmueble</strong>, analizamos los síntomas visibles y valoramos las posibles causas para determinar el origen más probable del problema. Este servicio resulta especialmente útil cuando existe un conflicto con constructora, seguro, comunidad, vecino u otra parte responsable.</p><p>El objetivo es aportar <strong>claridad técnica</strong>, delimitar responsabilidades cuando proceda y facilitar la toma de decisiones sobre <strong>reparación, negociación o reclamación</strong>.</p>',
        'list' => [
            '<strong>Inspección técnica del inmueble</strong> afectado por humedades o filtraciones.',
            'Análisis de <strong>síntomas visibles</strong>, daños asociados y antecedentes del caso.',
            'Identificación de posibles causas como <strong>capilaridad, filtración, condensación o fugas</strong>.',
            'Revisión de <strong>elementos constructivos e instalaciones</strong> implicadas.',
            '<strong>Diagnóstico técnico</strong> orientado a determinar la causa real del problema.',
            'Valoración del <strong>alcance del daño</strong> y de sus efectos funcionales o habitables.',
            '<strong>Base técnica útil</strong> para reclamaciones, reparaciones o negociación.',
            'Enfoque claro, riguroso y orientado a <strong>decisiones prácticas</strong>.'
        ],
        'images' => [
            e('/images/reports/Defectos-constructivos.webp'),
            e('/images/reports/Danos-estructurales.webp'),
            e('/images/reports/Causas-de-humedad.webp'),
            e('/images/reports/Incumplimiento-contrato-obra.webp'),
        ],
        'slide' => Status::ACTIVE,
        'slide-image' => e('/images/reports/Defectos-constructivos.webp'),
        'status' => Status::ACTIVE,
        'keywords' => 'perito de humedades, perito humedades, diagnóstico humedades, filtraciones, condensación, peritaje humedades, causa de humedades, informe técnico humedades',
    ],
    [
        'name' => 'Informe pericial de humedades',
        'category' => Category::REPORT,
        'subcategory' => ReportCategory::DAMAGE,
        'description' => 'Elaboramos informes periciales de humedades con análisis técnico, diagnóstico causal y documentación útil para reclamaciones, negociación o procedimientos judiciales.',
        'text' => '<p>El <strong>informe pericial de humedades</strong> recoge de forma estructurada el análisis técnico del problema, la inspección realizada, la causa identificada y las <strong>conclusiones fundamentadas</strong> del caso. No se trata solo de describir daños visibles, sino de <strong>justificar técnicamente su origen</strong>, alcance y posibles responsabilidades.</p><p>En ' . COMPANY_BRAND . ' elaboramos <strong>informes periciales claros, sólidos y documentados</strong> para casos de humedades, filtraciones, condensaciones y patologías relacionadas, con enfoque útil tanto para reclamaciones extrajudiciales como para <strong>procedimientos judiciales</strong>.</p><p>Este servicio es adecuado cuando necesitas un <strong>documento técnico defendible</strong>, con valor probatorio o con suficiente rigor para apoyar una reclamación frente a seguro, constructora, comunidad, vecino u otra parte implicada.</p>',
        'list' => [
            '<strong>Inspección técnica</strong> e incorporación de antecedentes y documentación disponible.',
            'Descripción del daño, <strong>síntomas observados</strong> y contexto constructivo.',
            '<strong>Diagnóstico de la causa</strong> de la humedad con base técnica.',
            'Análisis del <strong>alcance del problema</strong> y de sus consecuencias.',
            '<strong>Conclusiones fundamentadas</strong> y estructuradas en formato pericial.',
            '<strong>Documento útil</strong> para negociación, reclamación o juicio.',
            'Posibilidad de orientar el informe a <strong>necesidades probatorias</strong> concretas.',
            'Redacción clara, precisa y <strong>técnicamente defendible</strong>.'
        ],
        'images' => [
            e('/images/reports/Defectos-constructivos.webp'),
            e('/images/reports/Danos-estructurales.webp'),
            e('/images/reports/Causas-de-humedad.webp'),
            e('/images/reports/Incumplimiento-contrato-obra.webp'),
        ],
        'slide' => Status::ACTIVE,
        'slide-image' => e('/images/reports/Danos-estructurales.webp'),
        'status' => Status::ACTIVE,
        'keywords' => 'informe pericial de humedades, informe pericial humedades, peritaje humedades, informe técnico humedades, reclamación humedades, informe para juicio humedades, perito humedades',
    ],
    [
        'name' => 'Defectos constructivos',
        'category' => Category::REPORT,
        'subcategory' => ReportCategory::DAMAGE,
        'description' => 'Analizamos defectos constructivos en obra nueva, reformas o edificios existentes para identificar fallos, causas y posibles responsabilidades con criterio técnico.',
        'text' => '<p>El servicio de análisis de <strong>defectos constructivos</strong> permite identificar fallos de ejecución, materiales, encuentros, acabados o soluciones técnicas que afectan a la <strong>funcionalidad, habitabilidad, estética o seguridad</strong> del inmueble. Es habitual en reclamaciones por <strong>obra defectuosa</strong>, vicios ocultos o discrepancias entre lo ejecutado y lo esperable técnicamente.</p><p>En ' . COMPANY_BRAND . ' inspeccionamos el inmueble, documentamos los defectos observados y analizamos su posible origen desde un <strong>enfoque técnico y causal</strong>. Este servicio resulta especialmente útil para particulares, promotores, comunidades y despachos que necesitan un criterio técnico independiente.</p><p>El objetivo es determinar qué defecto existe, por qué se ha producido, qué implicaciones tiene y cómo puede documentarse para una <strong>reclamación</strong> o toma de decisiones posterior.</p>',
        'list' => [
            '<strong>Inspección técnica del inmueble</strong> y localización de defectos visibles.',
            'Clasificación de defectos <strong>estéticos, funcionales o constructivos</strong>.',
            'Análisis del <strong>origen probable del fallo</strong>: diseño, ejecución o materiales.',
            'Valoración del impacto del defecto en <strong>uso, habitabilidad o durabilidad</strong>.',
            '<strong>Documentación técnica y gráfica</strong> de apoyo.',
            'Criterio técnico útil para <strong>reclamaciones</strong> o revisión de obra.',
            'Enfoque orientado a <strong>causalidad</strong>, no solo a descripción superficial.',
            'Posibilidad de servir de base para un <strong>informe pericial</strong> más amplio.'
        ],
        'images' => [
            e('/images/reports/Defectos-constructivos.webp'),
            e('/images/reports/Danos-estructurales.webp'),
            e('/images/reports/Causas-de-humedad.webp'),
            e('/images/reports/Incumplimiento-contrato-obra.webp'),
        ],
        'slide' => Status::ACTIVE,
        'slide-image' => e('/images/reports/Causas-de-humedad.webp'),
        'status' => Status::ACTIVE,
        'keywords' => 'defectos constructivos, perito defectos constructivos, vicios ocultos, obra defectuosa, informe defectos constructivos, fallos de ejecución, patologías constructivas',
    ],
    [
        'name' => 'Daños estructurales',
        'category' => Category::REPORT,
        'subcategory' => ReportCategory::DAMAGE,
        'description' => 'Evaluamos daños estructurales en edificios y construcciones para valorar su alcance, causas, consecuencias y posibles medidas técnicas con base pericial.',
        'text' => '<p>El análisis de <strong>daños estructurales</strong> se centra en valorar afecciones en <strong>pilares, vigas, muros, cimentación</strong> u otros elementos resistentes que pueden comprometer la <strong>estabilidad, la seguridad o la funcionalidad</strong> de un inmueble. Este tipo de servicio es clave tras asentamientos, inundaciones, incendios, sobrecargas, defectos de ejecución o procesos patológicos avanzados.</p><p>En ' . COMPANY_BRAND . ' realizamos una <strong>evaluación técnica del daño estructural</strong> observado, su posible origen y su impacto sobre el comportamiento global del edificio. También valoramos si el problema requiere reparación, refuerzo, seguimiento o una decisión técnica más profunda.</p><p>Este servicio resulta útil en conflictos con aseguradoras, reclamaciones frente a terceros, decisiones patrimoniales o situaciones en las que es necesario <strong>acreditar técnicamente la entidad del daño</strong>.</p>',
        'list' => [
            'Inspección de <strong>elementos estructurales afectados</strong>.',
            'Análisis del <strong>tipo de daño</strong> y de su posible origen.',
            'Valoración de la afección sobre <strong>estabilidad, seguridad y uso</strong>.',
            'Revisión de síntomas como <strong>fisuras, deformaciones o desplazamientos</strong>.',
            '<strong>Documentación técnica y fotográfica</strong> del estado observado.',
            'Criterio técnico para valorar <strong>reparación, refuerzo o seguimiento</strong>.',
            '<strong>Base útil</strong> para reclamaciones, informes o decisiones técnicas.',
            'Enfoque <strong>independiente y fundamentado</strong>.'
        ],
        'images' => [
            e('/images/reports/Defectos-constructivos.webp'),
            e('/images/reports/Danos-estructurales.webp'),
            e('/images/reports/Causas-de-humedad.webp'),
            e('/images/reports/Incumplimiento-contrato-obra.webp'),
        ],
        'slide' => Status::ACTIVE,
        'slide-image' => e('/images/reports/Incumplimiento-contrato-obra.webp'),
        'status' => Status::ACTIVE,
        'keywords' => 'daños estructurales, perito daños estructurales, informe daños estructurales, grietas estructurales, estabilidad edificio, daño en cimentación, peritaje estructural',
    ],
    [
        'name' => 'Incumplimiento de obra',
        'category' => Category::REPORT,
        'subcategory' => ReportCategory::DAMAGE,
        'description' => 'Analizamos incumplimientos de obra comparando contrato, proyecto y realidad ejecutada para documentar desviaciones técnicas, calidades, plazos y perjuicios.',
        'text' => '<p>El servicio de <strong>incumplimiento de obra</strong> está orientado a determinar si una parte ha ejecutado trabajos de forma contraria a lo pactado en <strong>contrato, proyecto, mediciones o documentación técnica</strong> aplicable. Es habitual en disputas entre promotor, constructor, industriales, clientes o dirección facultativa.</p><p>En ' . COMPANY_BRAND . ' revisamos la documentación del caso, contrastamos lo contratado con lo ejecutado y analizamos posibles desviaciones en <strong>calidades, partidas, plazos, mediciones o modificaciones no justificadas</strong>. El resultado puede servir como base técnica para reclamar, negociar o defender una posición en un conflicto.</p><p>Este servicio es especialmente útil cuando existe discusión sobre qué debía hacerse, qué se ha ejecutado realmente y qué <strong>consecuencias técnicas o económicas</strong> se derivan de esa diferencia.</p>',
        'list' => [
            'Revisión de <strong>contrato, proyecto, mediciones y documentación</strong> asociada.',
            'Comparativa entre <strong>lo pactado y la realidad ejecutada</strong>.',
            'Análisis de desviaciones en <strong>calidad, plazo, precio o partidas</strong>.',
            'Detección de <strong>trabajos no ejecutados, mal ejecutados o modificados</strong>.',
            '<strong>Valoración técnica</strong> del incumplimiento observado.',
            '<strong>Base documental útil</strong> para negociación o reclamación.',
            'Enfoque objetivo y orientado a <strong>hechos verificables</strong>.',
            'Soporte técnico para <strong>conflictos de obra</strong> con recorrido legal o extrajudicial.'
        ],
        'images' => [
            e('/images/reports/Defectos-constructivos.webp'),
            e('/images/reports/Danos-estructurales.webp'),
            e('/images/reports/Causas-de-humedad.webp'),
            e('/images/reports/Incumplimiento-contrato-obra.webp'),
        ],
        'slide' => Status::INACTIVE,
        'slide-image' => e('/images/reports/Incumplimiento-contrato-obra.webp'),
        'status' => Status::ACTIVE,
        'keywords' => 'incumplimiento de obra, informe pericial incumplimiento obra, perito obra, conflicto de obra, reclamación obra, desviaciones de obra, perito construcción',
    ],
    [
        'name' => 'Tasación judicial',
        'category' => Category::REPORT,
        'subcategory' => ReportCategory::DAMAGE,
        'description' => 'Realizamos tasaciones judiciales con metodología técnica y valoración argumentada para litigios civiles, mercantiles, herencias, divorcios o conflictos patrimoniales.',
        'text' => '<p>La <strong>tasación judicial</strong> permite establecer el <strong>valor técnico-económico de un inmueble, edificación o suelo</strong> con una metodología argumentada y apta para su uso en contextos de litigio o controversia. Este tipo de informe resulta habitual en herencias, divorcios, embargos, particiones, expropiaciones o disputas patrimoniales.</p><p>En ' . COMPANY_BRAND . ' analizamos las características del inmueble, su estado, la documentación disponible y el <strong>método de valoración más adecuado</strong> según el caso. El informe se redacta con criterio técnico, estructura clara y justificación suficiente para servir de apoyo en negociación o <strong>procedimiento judicial</strong>.</p><p>El objetivo es aportar una <strong>valoración objetiva, trazable y técnicamente defendible</strong>, adaptada al contexto del conflicto y al tipo de activo analizado.</p>',
        'list' => [
            'Inspección y <strong>toma de datos del inmueble</strong> o activo a valorar.',
            'Análisis de <strong>características, estado y contexto</strong> del bien.',
            'Selección del <strong>método de valoración adecuado</strong> según el caso.',
            'Revisión de <strong>documentación técnica, registral o urbanística</strong> disponible.',
            'Elaboración de <strong>valoración técnica argumentada</strong>.',
            '<strong>Informe útil</strong> para litigios, reparto patrimonial o negociación.',
            'Enfoque objetivo, documentado y <strong>defendible</strong>.',
            'Adaptación a supuestos civiles, mercantiles o <strong>patrimoniales complejos</strong>.'
        ],
        'images' => [
            e('/images/reports/Defectos-constructivos.webp'),
            e('/images/reports/Danos-estructurales.webp'),
            e('/images/reports/Causas-de-humedad.webp'),
            e('/images/reports/Incumplimiento-contrato-obra.webp'),
        ],
        'slide' => Status::INACTIVE,
        'slide-image' => e('/images/reports/Incumplimiento-contrato-obra.webp'),
        'status' => Status::ACTIVE,
        'keywords' => 'tasación judicial, tasación judicial inmueble, perito tasador judicial, valoración inmueble litigio, informe de tasación judicial, tasación pericial, valoración patrimonial',
    ],
];

// Solo reports activos
$reports = filterActiveMembers($reports);

foreach ($reports as &$report) {
    $report['title'] = $report['name'];
    $report['alt'] = 'Imagen de ' . $report['name'];
    $report['url'] = $pages['Reports']['url'] . titleToUrl($report['name']);
    $report['slide-text'] = $report['description'];
}
unset($report);
?>