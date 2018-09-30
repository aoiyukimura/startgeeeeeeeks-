# New ports collection makefile for:	ec-cube
# Date created:		2015-09-25
# Whom:			SAKURA Internet Inc. <support@sakura.ad.jp>
#
# $FreeBSD$
#

PORTNAME=	eccube
PORTVERSION=	3.0.16
CATEGORIES=	sakura-ec
DISTNAME=	${PORTNAME}-${PORTVERSION}

MAINTAINER=	support@sakura.ad.jp
COMMENT=	${CGIURL}/html/index.php
WRKSRC=		${WRKDIR}/${DISTNAME}

# sakura-ports setting
INDEXDIR=	"${PREFIX}/${CGIDIR}"
NO_BUILD=	yes
FORCE_PKG_REGISTER=	yes
PLIST_SUB+=	CGIDIR="${CGIDIR}"

# pkg-sakura configure
CGISUBDIR?=	${PORTNAME}

# application setting
SUB_FILES=	pkg-message pkg-deinstall htaccess
SUB_LIST+=	CGISUBDIR="${CGISUBDIR}" \
		CGIDIR="${CGIDIR}" \
		CGIURL="${CGIURL}" \
		INDEXDIR="${INDEXDIR}" \
		DOMAIN="${DOMAIN}" \
		DBNAME="${DBNAME}" \
		DBUSER="${DBUSER}" \
		DBPASS="${DBPASS}" \
		DBHOST="${DBHOST}" \
		DBPREFIX="${DBPREFIX}"

pre-install:
	@cd ${WRKSRC} && ${FIND} -s * -type f |\
		${SED} -e 's|^|%%CGIDIR%%/|' > ${PLIST}
	@cd ${WRKSRC} && ${FIND} -d * -type d |\
		${SED} -e 's|^|@dirrm %%CGIDIR%%/|' >> ${PLIST}
	@${ECHO_CMD} '@dirrm %%CGIDIR%%' >> ${PLIST}

do-install:
	@${INSTALL} -d -m 705 "${INDEXDIR}"
	@${CP} -RpP "${WRKSRC}/app" \
		"${WRKSRC}/html" \
		"${WRKSRC}/src" \
		"${WRKSRC}/vendor" "${INDEXDIR}"
	@${CP} -p "${WRKSRC}/autoload.php" \
		"${WRKSRC}/cli-config.php" \
		"${WRKSRC}/.htaccess" "${INDEXDIR}"
	@${NKF} -w "${WRKDIR}/htaccess" > "${INDEXDIR}/html/.htaccess"

.include "sakura.port.mk"
.include "bsd.port.mk"
