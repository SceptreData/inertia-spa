import React from 'react';
import Authenticated from '@/Layouts/Authenticated';
import { Alert } from '../../Components/Alert'

export default function Dashboard(props) {
  const { songs } = props
  return (
    <Authenticated
      auth={props.auth}
      errors={props.errors}
      header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
    >
      <Alert>Song Songs</Alert>
      <ul className="mx-10 bg-black bg-opacity-10 px-5">
        {songs.map(song => {
          return (
            <li className="max-w-5xl mx-auto border my-3 px-5 rounded hover:bg-white">
              <h3 className="text-xl">{song.artist.name} - <span className="font-semibold">{song.title}</span></h3>
              <h4>{song.album.title}</h4>
            </li>)
        })}
      </ul>
    </Authenticated>
  );
}
