import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Title from "@layouts/title";
import TableBuilder from '@layouts/table';
import { useParams } from "react-router-dom";

import VisibilityIcon from '@material-ui/icons/Visibility';

function DiplomaSupplementMain(){
	return (
		<Box>
			<Title content="Приложение к диплому" />
			<Box mt={3}>
				<TableBuilder 
					url="diploma_supplement"
					rows={[
						{
							label: 'Ф.И.О',
							value: row => row.user.lastname + " " + row.user.firstname + " " + row.user.patronymic
						},
						{
							label: 'ИИН',
							value: row => row.user.iin || '-'
						},
						{
							label: 'Занимаемые должности',
							value: ''
						},
						{
							label: 'Редактировать',
							type: 'link',
							action: {
								icon: 'settings',
								variant: 'outlined',
								param: 'id',
								url_prefix: 'diploma_supplement',
								label: 'Редактировать'
							}
						}
					]}
				/>
			</Box>
		</Box>
	);
}

export default DiplomaSupplementMain;